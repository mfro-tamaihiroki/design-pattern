<?php

namespace App\Bridge;


use App\Brige\Interfaces\FileDataManageInterface;
use Exception;
use SplFileObject;

class CsvFileDataManage implements FileDataManageInterface
{
    private $csv_path;
    private $data;
    private $data_total = 0;
    private $pointer = 0;

    /**
     * FileDataManage constructor.
     * @param $csv_path string
     */
    public function __construct($csv_path)
    {
        $this->csv_path = $csv_path;
    }

    /**
     * @return bool
     */
    public function read(): bool
    {
        try {
            if (!file_exists($this->csv_path)) {
                throw new Exception('file not found');
            }
            $this->data = $this->getCsv($this->csv_path);
            $this->data_total = count($this->data);

        } catch (Exception $e) {
            echo($e->getMessage());
            return false;
        }
        return true;
    }

    /**
     * @return bool
     */
    public function display(): bool
    {
        try {
            if (empty($this->data[$this->pointer])) {
                throw new Exception('not found');
            }
            echo($this->data[$this->pointer]['id'] . '/' . $this->data[$this->pointer]['fullName'] . '<br>');
            $this->pointer++;
            return true;

        } catch (Exception $e) {
            echo($e->getMessage());
            return false;
        }
    }

    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->data_total;
    }

    /**
     * @return int
     */
    public function getPointer(): int
    {
        return $this->pointer;
    }

    /**
     * CSVローダー
     * ネットからのパクりもん
     *
     * @param string $csv_file CSVファイルパス
     * @param string $mode `sjis` ならShift-JISでカンマ区切り、 `utf16` ならUTF-16LEでタブ区切りのCSVを読む。'utf8'なら文字コード変換しないでカンマ区切り。
     * @return array ヘッダ列をキーとした配列を返す
     */
    private function getCsv($csv_file, $mode = 'sjis')
    {
        // 文字コードを変換しながら読み込めるようにPHPフィルタを定義
        if ($mode === 'sjis') $filter = 'php://filter/read=convert.iconv.cp932%2Futf-8/resource=' . $csv_file;
        else if ($mode === 'utf16') $filter = 'php://filter/read=convert.iconv.utf-16%2Futf-8/resource=' . $csv_file;
        else if ($mode === 'utf8') $filter = $csv_file;

        // SplFileObject()を使用してCSVロード
        $file = new SplFileObject($filter);
        if ($mode === 'utf16') $file->setCsvControl("\t");
        $file->setFlags(
            SplFileObject::READ_CSV |
            SplFileObject::SKIP_EMPTY |
            SplFileObject::READ_AHEAD
        );

        // 各行を処理
        $records = array();
        foreach ($file as $i => $row) {
            // 1行目はキーヘッダ行として取り込み
            if ($i === 0) {
                foreach ($row as $j => $col) $colbook[$j] = $col;
                continue;
            }

            // 2行目以降はデータ行として取り込み
            $line = array();
            foreach ($colbook as $j => $col) $line[$colbook[$j]] = @$row[$j];
            $records[] = $line;
        }
        return $records;
    }
}