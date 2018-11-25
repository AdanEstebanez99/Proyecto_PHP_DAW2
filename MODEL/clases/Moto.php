<?php    

class Moto {

    public $ID_PROD;
    public $ID_MAR;
    public $NOM_MAR;
    public $ID_MOD;
    public $NOM_MOD;
    public $NOM_PRO;
    public $COL_PRO;
    public $CIL_PRO;
    public $IMG_PRO;


    function __construct($ID_PROD, $ID_MAR, $NOM_MAR, $ID_MOD, $NOM_MOD, $NOM_PRO, $COL_PRO, $CIL_PRO, $IMG_PRO) {

            $this->ID_PROD = $ID_PROD; 
            $this->ID_MAR = $ID_MAR;
            $this->NOM_MAR = $NOM_MAR;
            $this->ID_MOD = $ID_MOD;
            $this->NOM_MOD = $NOM_MOD;
            $this->NOM_PRO = $NOM_PRO;
            $this->COL_PRO = $COL_PRO; 
            $this->CIL_PRO = $CIL_PRO;
            $this->IMG_PRO = $IMG_PRO;
    }
    
}