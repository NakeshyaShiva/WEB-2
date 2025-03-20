<?php
class Animals {
    public $Animals = ["Kucing", "Harimau", "Buaya", "Kelinci", "Ular"];

    function index(){
        echo "<ol>";
        foreach ($this->Animals as $key => $value){
            echo "<li>$value</li>";
        }
        echo "</ol>";
    }
    function store($hewan){
        array_push($this->Animals, $hewan);

        $this->index();
    }
    public function update($key, $value)
    {
        if(isset($this->Animals[$key])) {
            $this->Animals[$key] = $value;
            // Memanggil method  index
            $this->index();
        } else{
            echo "hewan tidak di temukan";
        }
    }
    public function destroy($key){
        if(isset($this->Animals[$key])) {
           unset($this->Animals[$key]);
            // Memanggil method  index
            $this->index();
        } else{
            echo "hewan tidak di temukan";
        }
    }
       
}

$hewan = new Animals();
echo "Index - menampilkan seluruh data hewan <br>";
$hewan->index();
echo "<br>";

echo "Store - Menambahkan data hewan baru (Burung)<br>";
$hewan->store("Burung");
echo "<br>";

echo "Update - Mengubah data hewan<br>";
$hewan->update(6, "Kucing Anggora");
echo "<br>";

echo "Destroy - Menghapus data hewan<br>";
$hewan->destroy(0);
echo "<br>";
?>