<?php
namespace app\Http\Controller\Navigations;

class MasterController{
    public $history;
    function render(): void
    {
        require_once '../Resources/Views/Navigations/MasterView.php';
    }
    function checkSelect(){
        if(isset($_SESSION['CurrentSelection'])){
            $this->history = $_SESSION['CurrentSelection'];
        }else{
            $this->history = "DiscoverController";
        }
    }
}


    $display = new MasterController;
$display->checkSelect();
$display->render();