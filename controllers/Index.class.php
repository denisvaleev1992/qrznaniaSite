<?php
class Index extends Controller
{
    protected function action_index()
    {
    	$massiv=[]; 
        $base = DB::getInstance()->Select('SELECT * FROM knowledgebase ORDER BY RAND() LIMIT 1'); 
        if (isset($base[0])) { 
             $massiv['title']=$base[0]['title'];
             $massiv['content']='<ul id="gtco-post-list">
                        <li id="elem" class="full entry animate-box" data-animate-effect="fadeIn"> 
                                <div class="entry-img" style="background-image: url(images/'.$base[0]['img'].'"></div>
                                <div class="entry-desc">
                                    <h3>'.$base[0]['title'].'</h3>
                                    '.$base[0]['text'].'
                                </div>
                        </li>
                    </ul>
                    </div>
                  <form method="POST" id="formx" action="javascript:void(null);" onsubmit="call();">
                      <ul class="ks-cboxtags">';
            if (isset($_GET["route"])) {
                 $route = DB::getInstance()->Select('SELECT * FROM knowledgebase WHERE themId=:themId ORDER BY RAND() LIMIT 1',['themId'=>intval($_GET["route"])]);
                 if (isset($route[0])) {
                       $massiv['content'] .= '<li><input type="checkbox" id="'.intval($_GET["route"]).'" value="'.intval($_GET["route"]).'" name="'.intval($_GET["route"]).'"><label for="'.intval($_GET["route"]).'">Про маршрут</label></li>';
                    }   
            }


        } else {
            $base;
            $massiv['title']='Ошибка';
            $massiv['content']='<p>При загрузке данных произошла ошибка:(</p>';
        } 
        return $massiv;	
	}
}