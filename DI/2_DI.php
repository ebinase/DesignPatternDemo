<?php
ini_set('display_errors', 1);

// DIを使ったパターン
// TODO:これいらない
///////////////////////////////////////////////////////////////////
class NindendoSwitch
{
    // スイッチで遊ぶゲームのオブジェクト
    protected $game;

    // 外部からスマブラのオブジェクトを注入
    public function __construct(SmashBros $smashBros)
    {
        print '起動中...<br>';

        // $this->game = new SmashBros();
        $this->game = $smashBros;

        print 'Switchが起動しました。<br>';
    }

    public function run()
    {
        $this->game->display();
    }
}

///////////////////////////////////////////////////////////////////

class SmashBros
{
    public function display()
    {
        print '== SMASH BROTHERS ====================<br>';
    }
}

///////////////////////////////////////////////////////////////////

//スイッチを起動
$gameConsole = new NindendoSwitch(new SmashBros());
//ゲームを開始
$gameConsole->run();