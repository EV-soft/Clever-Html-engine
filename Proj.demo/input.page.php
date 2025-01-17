<?php   $DocFile= './Proj.demo/input.page.php';    $DocVer='1.4.0';    $DocRev='2024-06-01';      $DocIni='evs';  $ModulNr=0; ## File informative only
$©= 'Open source - 𝘓𝘐𝘊𝘌𝘕𝘚𝘌 & 𝘊𝘰𝘱𝘺𝘳𝘪𝘨𝘩𝘵 ©  2019-2024 EV-soft *** See the file: LICENSE';

$sys= $GLOBALS["gbl_ProgRoot"]= '../'; 

## Activate needed libraries: Set 0:deactive  1:Local-source  2:WEB-source-CDN
$needJquery=      '2';
$needTablesorter= '2';
$needPolyfill=    '0';
$needFontawesome= '2';
$needTinymce=     '0';

require_once ($sys.'php2html.lib.php');


## REMARK: scannSource() are only usefull, when rules like:     $name='intg', $valu=$intg, - are used ! 
## Can not be used when variables are in lists: 'chck' 'rado' 'opti'
    $varId= scannSource('$name=',"'",[__FILE__]);   //  
    foreach ($varId as $id) {$$id= postValue($$id,$id); }; // echo $id.':'.$$id.' ';};
    if (isset($_POST['name']))  { $namex = $_POST['name']; }
    
    $text= '87654321';
    $intg= 87654321;
    $dec0= 87654321;
    $dec1= 87654321;
    $dec2= 87654321;
    $date= date("Y-m-d");

##### SCREEN OUTPUT:
#!!!: Remember no OUTPUT to screen, before htm_Page_0

htm_Page_(titl:'input.page.php',hint:$©,info:'File: '.$DocFile.' - ver:'.$DocVer,inis:'',algn:'center', imag:'../_accessories/_background.png',pbrd:false);
    echo '<style> body { padding-top: 0; margin-top:0; } </style>';
    // $menudata is set in: project.init.php
    htm_Menu_TopDown(capt:'Clever html engine',data:$menudata, foot:'PHP2HTML', styl:'top:0px;', note:$menunote); 
    htm_nl(2);
    
    htm_Card_(capt: 'The collection of htm_Input() variants:',icon: 'fas fa-info',hint: '',form: 'test',acti: '',clas: 'cardW720',wdth: '',styl: 'background-color: white;',attr: '');

    htm_Fieldset_(capt:'TEXT variants',icon:'',hint:'',wdth:'96%',marg:'',attr:'',rtrn:false);
        htm_Input(labl:'@htm_Input(Text)',plho:'',               icon:'',hint:'@Demo of htm_Input Field type text',                                 vrnt:'text',name:'text',valu:$text,  form:'',wdth:'');
        htm_Input(labl:'@htm_Input(html)',plho:'<div>...</div>', icon:'',hint:'@Demo of htm_Input Field type html: Multi-line formatted html-text', vrnt:'html',name:'html',valu:'',     form:'',wdth:'200px', algn:'left',attr:'',rtrn: false,unit:'',disa:false,rows:'3');
        htm_Input(labl:'@htm_Input(area)',plho:'Enter...',       icon:'',hint:'@Demo of htm_Input Field type area: Multi-line text',                vrnt:'area',name:'area',valu:'',     form:'',wdth:'200px', algn:'left',attr:'',rtrn: false,unit:'',disa:false,rows:'6');
    htm_Fieldset_end();
    htm_nl(2);
    
    htm_Fieldset_(capt:'NUMBER variants',icon:'',hint:'',wdth:'96%',marg:'',attr:'',rtrn:false);
        htm_Input(labl:'@htm_Input(Intg)',plho:'', icon:'',hint:'@Demo of htm_Input Field type intg: centered integer',                 vrnt:'intg',name:'intg', valu:$intg,form:'',wdth:'', algn:'center');
        htm_Input(labl:'@htm_Input(Dec0)',plho:'', icon:'',hint:'@Demo of htm_Input Field type dec0: centered number with 0 decimals',  vrnt:'dec0',name:'dec0', valu:$dec0,form:'',wdth:'', algn:'center',attr:'',rtrn: false, unit:' %');
        htm_Input(labl:'@htm_Input(Dec1)',plho:'', icon:'',hint:'@Demo of htm_Input Field type dec1: number with 1 decimal ',           vrnt:'dec1',name:'dec1', valu:$dec1,form:'',wdth:'');
        htm_nl(2);
        htm_Input(labl:'@htm_Input(Dec2)',plho:'', icon:'',hint:'@Demo of htm_Input Field type dec2: number with 2 decimal',            vrnt:'dec2',name:'dec2', valu:$dec2,form:'',wdth:'', algn:'center',attr:'',rtrn: false, unit:'<$ ');
        htm_Input(labl:'htm_Input(Dec0)', plho:'', icon:'',hint:'Demo of htm_Input Field type dec0: left aligned number with %-suffix', vrnt:'dec0',name:'dec0a',valu:$text,form:'',wdth:'', algn:'left',  attr:'',rtrn: false, unit:' %');
        htm_Input(labl:'htm_Input(Dec1)', plho:'', icon:'',hint:'Demo of htm_Input Field type dec1: centered number with %-suffix',     vrnt:'dec1',name:'dec1a',valu:$text,form:'',wdth:'', algn:'center',attr:'',rtrn: false, unit:' %');
        htm_nl(2);
        htm_Input(labl:'htm_Input(Dec2)', plho:'', icon:'',hint:'Demo of htm_Input Field type dec2: right aligned number with %-suffix',vrnt:'dec2',name:'dec2a',valu:$text,form:'',wdth:'', algn:'right', attr:'',rtrn: false, unit:' %');
        htm_Input(labl:'@htm_Input(num1)',plho:'', icon:'',hint:'@Demo of htm_Input Field type numb: number with 1 decimal',            vrnt:'num1',name:'num1', valu:$text,form:'',wdth:'', algn:'center');
        htm_Input(labl:'@htm_Input(num0)',plho:'', icon:'',hint:'@Demo of htm_Input Field type numb: left-justified number and label',  vrnt:'num0',name:'num0', valu:$text,form:'',wdth:'', algn:'left',  attr:'',rtrn: false, unit:'', disa:false, rows:'2',step:'',list:[],llgn:'L' );
    htm_Fieldset_end();
    htm_nl(2);
    
    htm_Fieldset_(capt:'LIST-type',icon:'',hint:'',wdth:'96%',marg:'',attr:'',rtrn:false);
        htm_Input(labl:'@htm_Input(opti)',plho:'@Enter...',icon:'',hint:'@Demo of htm_Input Field type opti: left aligned number with %-unit', 
                  vrnt:'opti',name:'opti',valu:$text,  form:'',wdth:'120px',  algn:'left',attr:'',rtrn: false,
                  unit:' %',disa:false,rows:'3',step:'',list: [
                    ['name1','private','@Details about private'],
                    ['name2','proff','@Details about profession'],
                    ['name3','private','@Details about private','checked'],
                    ['name4','hobby','@Details about hobby'],
                    ['name5','private','@Details about private'],
                ]);
            
        htm_Input(labl:'@htm_Input(chck)',plho:'Enter...', icon:'',
                  hint:'@Demo of htm_Input Field type chck: Multi-line formatted chck-text', 
                  vrnt:'chck',name:'chck1',valu:'', form:'',wdth:'120px', algn:'left',attr:'',rtrn: false,
                  unit:'',disa:false,rows:'3',step:'',list: [
                    ['pos1','@private','@Details about private'],
                    ['pos2','@proff','@Details about profession'],
                    ['pos3','@private','@Details about private'],
                    ['pos4','@hobby','@Details about hobby','checked'],
                    ['pos5','@private','@Details about private'],
                ]);
        
        htm_Input(labl:'@htm_Input(rado)',plho:'Enter...', icon:'',
                  hint:'@Demo of htm_Input Field type radio',
                  vrnt:'rado',name:'rad1',valu:'', form:'', wdth:'120px', algn:'left',attr:'',rtrn: false,
                  unit:'',disa:false,rows:'2',step:'',list: [
                    ['post1','private','@private'],
                    ['post2','proff','@profession'],
                    ['post3','private','@private','checked'],
                    ['post4','hobby','@hobby'],
                    ['post5','private','@private'],
                ]);
        htm_Input(labl:'@htm_Input(chck)',plho:'Enter...', icon:'', 
                  hint:'@Demo of htm_Input Field type checkbox in a row',
                  vrnt:'chck',name:'chcka',valu:'',  form:'', wdth:'', algn:'left',attr:'',rtrn: false,
                  unit:'',disa:false,rows:'1',step:'',list: [
                    ['postc','dark','@Dark','checked'],
                    ['postd','shiny','@Shiny'],
                ]);
        htm_Input(labl:'@htm_Input(rado)',plho:'Enter...', icon:'', 
                  hint:'@Demo of htm_Input Field type radio in a row',   
                  vrnt:'rado',name:'rad2',valu:'',  form:'', wdth:'', algn:'left',attr:'',rtrn: false,
                  unit:'',disa:false,rows:'1',step:'',list: [
                    ['posta','happy','@Happy','checked'],
                    ['postb','sorry','@Sorry'],
                ]);
    htm_Fieldset_end();
    htm_nl(2);
    
    htm_Fieldset_(capt:'OTHER',icon:'',hint:'',wdth:'',marg:'',attr:'',rtrn:false);
        // echo '<input type="date" value="2017-06-01" />';
        htm_Input(labl:'@htm_Input(Date)',plho:'',              icon:'',hint:'@Demo of htm_Input Field type date with browser popup selector',   vrnt:'date',name:'date', valu:$date,    form:'',wdth:'',    algn:'center', attr:'');
        htm_Input(labl:'htm_Input(chck)', plho:'Enter...',      icon:'',hint:'Demo of htm_Input Field type chck: Multi-line formatted chck-text',vrnt:'chck',name:'chck', valu:'',       form:'',wdth:'200px', algn:'left', attr:'',rtrn: false,unit:'',disa:false,rows:'3',step:'',list: [
                    ['name1','@Label1','@Details about label1','checked']
                ]);
        htm_Input(labl:'@htm_Input(mail)',plho:'aa@bb.dd',      icon:'',hint:'@Demo of htm_Input Field type mail with syntax control',         vrnt:'mail',name:'mail',valu:'aa@bb.dd', form:'',wdth:'300px');
        htm_nl(2);  
        htm_Input(labl:'@htm_Input(rang)',plho:'',              icon:'',hint:'@Demo of htm_Input Field type range: 0..50 ',                    vrnt:'rang',name:'rang',valu:'10',      form:'',wdth:'',      algn:'left',  attr:' min="0" max="50" ',rtrn: false,unit:'',disa:false,rows:'1',step:'');
        htm_Input(labl:'@htm_Input(url)', plho:'https://...',   icon:'',hint:'@Demo of htm_Input Field type url with syntax control',          vrnt:'link',name:'link',valu:'',        form:'',wdth:'',      algn:'left',  attr:'',rtrn: false,unit:'',disa:false,rows:'3',step:'');
        htm_Input(labl:'@htm_Input(pass)',plho:'Enter...',      icon:'',hint:'@Demo of htm_Input Field type pass with "hidden" output',        vrnt:'pass',name:'pas1',valu:'',        form:'',wdth:'',      algn:'left',  attr:'',rtrn: false,unit:'',disa:false,rows:'3',step:'',list:[],llgn:'R',bord:'');
        htm_Input(labl:'@htm_Input(barc)',plho:'',              icon:'',hint:'@Demo of htm_Input Field type barc: shown with font barcode',    vrnt:'barc',name:'barc',valu:'BARCODE', form:'',wdth:'',      algn:'center',attr:'',rtrn: false,unit:'');
        htm_nl(2);  
        htm_Input(labl:'@htm_Input(colr)',plho:'',              icon:'',hint:'@Demo of htm_Input Field type color',                            vrnt:'colr',name:'colr',valu:'#0000ff', form:'',wdth:'100px', algn:'left',  attr:'',rtrn: false,unit:'',disa:false,rows:'1',step:'');
        htm_Input(labl:'@htm_Input(butt)',plho:'',              icon:'',hint:'@Demo of htm_Input Field type butt',                             vrnt:'butt',name:'butt',valu:'BUTTON',  form:'',wdth:'100px', algn:'center',attr:'',rtrn: false,unit:'',disa:false,rows:'1',step:'');
        htm_Input(labl:'@htm_Input(sear)',plho:'?',icon:'fas fa-search',hint:'@Demo of htm_Input Field type search',                           vrnt:'sear',name:'sear',valu:'',        form:'',wdth:'',      algn:'left',  attr:'',rtrn: false,unit:'',disa:false,rows:'1',step:'');
        htm_Input(labl:'@htm_Input(time)',plho:'',              icon:'',hint:'@Demo of htm_Input Field type time',                             vrnt:'time',name:'time',valu:'',        form:'',wdth:'100px', algn:'left',  attr:'',rtrn: false,unit:'',disa:false,rows:'1',step:'');
        htm_Input(labl:'@htm_Input(week)',plho:'',              icon:'',hint:'@Demo of htm_Input Field type week',                             vrnt:'week',name:'week',valu:'',        form:'',wdth:'',      algn:'left',  attr:'',rtrn: false,unit:'',disa:false,rows:'1',step:'');
        htm_nl(2);  
        htm_Input(labl:'@htm_Input(mont)',plho:'',              icon:'',hint:'@Demo of htm_Input Field type month',                            vrnt:'mont',name:'mont',valu:'',        form:'',wdth:'',      algn:'left',  attr:'',rtrn: false,unit:'',disa:false,rows:'1',step:'');
        htm_Input(labl:'@htm_Input(file)',plho:'',              icon:'',hint:'@Demo of htm_Input Field type file',                             vrnt:'file',name:'file',valu:'',        form:'',wdth:'',      algn:'left',  attr:'',rtrn: false,unit:'',disa:false,rows:'1',step:'');
        htm_Input(labl:'@htm_Input(imag)',plho:'',              icon:'',hint:'@Demo of htm_Input Field type image',                            vrnt:'imag',name:'imag',valu:'',        form:'',wdth:'100px', algn:'left',  attr:'',rtrn: false,unit:'',disa:false,rows:'1',step:'');
    htm_nl(2);
    
    htm_Inbox(labl:'htm_Inbox',plho:'@Enter...',icon:'fas fa-info',hint:'Tooltip text',vrnt: '',name:'Body_div',valu:'EMPTY box',form:'',wdth:'150px;',algn:'left',
                  attr:'color: green;',rtrn:false,unit:'',disa:true,rows:'2',step:'',list:[],llgn:'R',bord:'1px solid var(--grayColor);',ftop:'');

    $html= '
    <table style="border: 2px solid var(--grayColor);">
    <tr><td>a</td><td>b</td><td>c</td></tr>
    <tr><td>1</td><td>2</td><td>3</td></tr>
    <tr><td>x</td><td>y</td><td>z</td></tr>
    </table>
    ';
    htm_Inbox(labl:'htm_Inbox-test RO',plho:'@Enter...',icon:'fas fa-info',hint:'This is a test of htm_Inbox() containing a table.<be>Readonly',
                  vrnt: '',name:'Body_div',valu:$html,form:'',wdth:'33%;',algn:'center',
                  attr:'color: green;',rtrn:false,unit:'',disa:false,rows:'2',step:'',list:[],llgn:'R',bord:'1px solid var(--grayColor);',ftop:'');

    htm_Inbox(labl:'htm_Inbox-test RW',plho:'@Enter...',icon:'fas fa-info',hint:'This is a test of editable htm_Inbox() containing a table',
                  vrnt: '',name:'Body_div',valu:$html,form:'',wdth:'33%;',algn:'center',
                  attr:'color: green;',rtrn:false,unit:'',disa:true,rows:'2',step:'',list:[],llgn:'R',bord:'1px solid var(--grayColor);',ftop:'');
    echo '<br>'.lang('@htm_Inbox() is not really an Input() element, but looks like htm_Input() with a content that you decide.');
    htm_Fieldset_end();
    htm_nl(2);

    htm_Card_end( labl:'@Save', icon:'', hint:'@Just demo !', name:'', form:'',subm:false, attr:'', akey:'', kind:'save', simu:false);
    
htm_Page_end();
?>