<?php
/* بسم الله الرحمن الرحيم */

class Library 
{
    public $myBook = [
        [   'book_name' => "Programmer Dari Gunung Kidul",
            'isbn'      => "001.3AE"
        ],
        [   'book_name' => "Copy Paste Developer",
            'isbn'      => "002.57U"
        ],
        [   'book_name' => "Ruang Guru",
            'isbn'      => "002.22R"
        ]
    ];

    public function printMyBook()
    {
        foreach ($this->myBook as $key => $value) 
        { 
            print_r ("$key. ".$value['book_name'].PHP_EOL);
        }
    }

    public function my_Book($my_Book)
    {
        foreach ($this->myBook[$my_Book] as $key) {    //looking all book
            return ($this->myBook[$my_Book]);
        }
    }

    public function borrowMyBook($my_Book) {
        unset($this->myBook[$my_Book],$this->myBook[$my_Book]);      //borrowing book
        return $this->myBook=array_values($this->myBook) ;
    }

    public function bookNotUsed($notUse) {
        array_push($this->myBook,$notUse);      //restoring
        return($this->myBook);
       }
}
$myLibrary = new Library();
echo "Our Product : ".PHP_EOL;
print_r($myLibrary->printMyBook());

echo "silahkan pilih >>: ". PHP_EOL;
$use = (int) fgets (STDIN);

echo "terima kasih sudah memilih buku kami". PHP_EOL;
print_r($myLibrary->my_Book($use));

$notUse = $myLibrary->my_Book($use);

echo PHP_EOL;
echo "sisa buku kami >>". PHP_EOL;
$sisa = ($myLibrary->borrowMyBook($use));
print_r($sisa);

echo PHP_EOL;
echo "apakah akan anda kembalikan ? ".PHP_EOL.PHP_EOL;
echo "kembalikan press : y !".PHP_EOL;
echo "masih mau pinjam press : n !".PHP_EOL.PHP_EOL;
$usee = fgets(STDIN);

if (trim($usee) === "y"){                                               //function "trim" untuk menghapus semua spasi
    print_r($myLibrary->bookNotUsed($notUse));
    echo "TERIMA KASIH TELAH MENGGUNAKAN  PRODUCT KAMI.".PHP_EOL;
}elseif (trim($usee) === "n") {
    print_r ($sisa);
    echo "TIDAK ADA BUKU YANG ANDA KEMBALIKAN" . PHP_EOL;
}else{
    echo "YANG ANDA INPUT GAK JELAS!!!";
}