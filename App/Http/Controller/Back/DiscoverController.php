<?php
namespace App\Http\Controller\Back;
class DiscoverController{
    public function DiscoverController(): void{
        $this->render();
    }
    function render(): void
    {
        $this->activateNavlight();
        require_once 'Resources/View/Back/DiscoverView.php';
    }
    function activateNavlight(){
        $_SESSION['CurrentSelection'] = 'DiscoverController';
    }
}