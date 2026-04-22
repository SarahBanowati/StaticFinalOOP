<?php
class Kendaraan {
    final public function mesin() {
        echo "Mesin standar";
    }
}

class Mobil extends Kendaraan {
    // Akan ERROR jika mencoba meng-override method mesin
    public function mesin() {
        echo "Mesin mobil";
    }
}
?>