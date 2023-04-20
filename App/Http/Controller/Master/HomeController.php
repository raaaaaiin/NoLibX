<?php
namespace app\Http\Controller\Master;
class HomeController{
    public function HomeController(): void{
        $this->render();
    }
    function render(): void
    {
        require_once 'Resources/view/Master/HomeView.php';
    }

}
