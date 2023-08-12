<?php
namespace App\Admin\Controllers;

use App\Admin\Forms\Test;
use App\Http\Controllers\Controller;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Card;

class TestController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('测试')
            ->body(new Card(new Test()));
    }
}