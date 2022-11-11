<?php   $DocFile= './Proj.demo/input.page.php';    $DocVer='1.2.0';    $DocRev='2022-05-25';     $DocIni='evs';  $ModulNr=0; ## File informative only
$©= 'Open source - 𝘓𝘐𝘊𝘌𝘕𝘚𝘌 & 𝘊𝘰𝘱𝘺𝘳𝘪𝘨𝘩𝘵 ©  2019-2020 EV-soft *** See the file: LICENSE';

$sys= $GLOBALS["gbl_ProgRoot"]= '../';
require_once ($sys.'php2html.lib.php');
require_once ($sys.'menu.inc.php');
// require_once ($sys.'translate.inc.php');
// require_once ($sys.'filedata.inc.php');

## Speedup page-loading, if some libraryes is not needed:
//      ConstName:          ix:   LocalPath:                 CDN-path:
define('LIB_JQUERY',        [1, '_assets/jquery/',          'https://cdnjs.cloudflare.com/ajax/libs/']);
define('LIB_TABLESORTER',   [1, '_assets/tablesorter/js/',  'https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.30.1/js/']);
define('LIB_POLYFILL',      [0, '_assets/',  '']);
define('LIB_POPSCRIPTS',    [0, '_assets/',  '']);
define('LIB_FONTAWESOME',   [1, '_assets/font-awesome6/',   'https://cdnjs.cloudflare.com/ajax/libs/font-awesome6/']);
define('LIB_SWITCHBOX',     [0, '_assets/',  '']);  // Not in use       
define('LIB_POPUPSYSTEM',   [0, '_assets/',  '']);  // Not in use       
// Set ix 0:deactive  1:Local-source  2:WEB-source-CDN


## REMARK: scannSource() are only usefull, when rules like:     $name='intg', $valu=$intg, - are used !
## Can not be used when variables are in lists: 'chck' 'rado' 'opti'
    $varId= scannSource('$name=',"'",[__FILE__]);   //  
    foreach ($varId as $id) {$$id= postValue($$id,$id); }; // echo $id.':'.$$id.' ';};
    if (isset($_POST['name']))  { $namex = $_POST['name']; }
    
    $date= date("Y-m-d");

##### SCREEN OUTPUT:
#!!!: Remember no OUTPUT to screen, before htm_Page_0


htm_Page_0($titl='input.page.php',$hint=$©,$info='File: '.$DocFile.' - ver:'.$DocVer,$inis='',$algn='center', $gbl_Imag='../_accessories/_background.png',$gbl_Bord=false);
    Menu_Topdropdown(true); htm_nl(1);

    htm_Panel_0($capt= 'The collection of htm_Input() variants:',$icon= 'fas fa-info',$hint= '',$form= 'test',$acti= '',$clas= 'panelW720',$wdth= '',$styl= 'background-color: white;',$attr= '' /* ,$where='Undefined',$BookMark='' */ );
    if (USEGRID) echo '<div class="grid-container tableStyle" style="width: 700px; margin:auto; background-color: white; background-image: none;">';

    htm_Input($labl='@htm_Input(Text)',$plho='',         $icon='',$hint='@Demo of htm_Input Field type text',                                  $type='text',$name='text',$valu=$text,       $form='',$wdth='');
    htm_Input($labl='@htm_Input(Date)',$plho='',         $icon='',$hint='@Demo of htm_Input Field type date with browser popup selector',      $type='date',$name='date',$valu=$date,       $form='',$wdth='');
    htm_Input($labl='@htm_Input(Intg)',$plho='',         $icon='',$hint='@Demo of htm_Input Field type intg: centered integer',                $type='intg',$name='intg',$valu=$intg,       $form='',$wdth='',  $algn='center');
                                                                                                                                                                                    
    htm_Input($labl='@htm_Input(Dec0)',$plho='',         $icon='',$hint='@Demo of htm_Input Field type dec0: centered number with 0 decimals', $type='dec0',$name='dec0',$valu=$dec0,       $form='',$wdth='',  $algn='center',$attr='',$rtrn= false,$unit=' %');
    htm_Input($labl='@htm_Input(Dec1)',$plho='',         $icon='',$hint='@Demo of htm_Input Field type dec1: number with 1 decimal ',          $type='dec1',$name='dec1',$valu=$dec1,       $form='',$wdth='');
    htm_Input($labl='@htm_Input(Dec2)',$plho='',         $icon='',$hint='@Demo of htm_Input Field type dec2: number with 2 decimal',           $type='dec2',$name='dec2',$valu=$dec2,       $form='',$wdth='',  $algn='center',$attr='',$rtrn= false,$unit='<$ ');
    htm_Input($labl='@htm_Input(opti)',$plho='@Enter...',$icon='',$hint='@Demo of htm_Input Field type opti: left aligned number with %-unit', $type='opti',$name='opti',$valu='87654321',  $form='',$wdth='',  $algn='left',$attr='',$rtrn= false,$unit=' %',$disa=false,$rows='3',$step='',$list= [
    ['name1','private','@Details about private'],
    ['name2','proff','@Details about profession'],
    ['name3','private','@Details about private','checked'],
    ['name4','hobby','@Details about hobby'],
    ['name5','private','@Details about private'],
    ]);
    htm_Input($labl='htm_Input(Dec0)', $plho='',         $icon='',$hint='Demo of htm_Input Field type dec0: left aligned number with %-suffix', $type='dec0',$name='dec0a',$valu='87654321',$form='',$wdth='', $algn='left',$attr='',$rtrn= false,$unit=' %');
    htm_Input($labl='htm_Input(Dec1)', $plho='',         $icon='',$hint='Demo of htm_Input Field type dec1: centered number with %-suffix',     $type='dec1',$name='dec1a',$valu='87654321',$form='',$wdth='', $algn='center',$attr='',$rtrn= false,$unit=' %');
    htm_Input($labl='htm_Input(Dec2)', $plho='',         $icon='',$hint='Demo of htm_Input Field type dec2: right aligned number with %-suffix',$type='dec2',$name='dec2a',$valu='87654321',$form='',$wdth='', $algn='right',$attr='',$rtrn= false,$unit=' %');
                                                                                                                                                                          
    htm_Input($labl='@htm_Input(num1)',$plho='',         $icon='',$hint='@Demo of htm_Input Field type numb: number with 1 decimal',            $type='num1',$name='num1', $valu='87654321',$form='',$wdth='', $algn='center');
    htm_Input(     '@htm_Input(num0)', $plho='',         $icon='',      '@Demo of htm_Input Field type numb: left-justified number and label',        'num0',      'num0',       '87654321',$form='',$wdth='', $algn='left',$attr='',$rtrn= false,$unit='',$disa=false,$rows='2',$step='',$list=[],$llgn='L' );
    htm_Input($labl='htm_Input(chck)', $plho='Enter...', $icon='',$hint='Demo of htm_Input Field type chck: Multi-line formatted chck-text',    $type='chck',$name='chck', $valu='',        $form='',$wdth='', $algn='left',$attr='',$rtrn= false,$unit='',$disa=false,$rows='3',$step='',$list= [
        ['name1','@Label1','@Details about label1','checked'],
      //['name2','@Label2','@Details about label2','checked']
    ]);
    htm_Input($labl='@htm_Input(mail)',$plho='aa@bb.dd',       $icon='',$hint='@Demo of htm_Input Field type mail with syntax control',             $type='mail',$name='mail',$valu='',         );
    htm_Input($labl='@htm_Input(url)', $plho='https://...',    $icon='',$hint='@Demo of htm_Input Field type url with syntax control',              $type='link',$name='link',$valu='',          $form='',$wdth='', $algn='left',$attr='',$rtrn= false,$unit='',$disa=false,$rows='3',$step='');
    htm_Input($labl='@htm_Input(pass)',$plho='Enter...',       $icon='',$hint='@Demo of htm_Input Field type pass with "hidden" output',            $type='pass',$name='pas1',$valu='',          $form='',$wdth='', $algn='left',$attr='',$rtrn= false,$unit='',$disa=false,$rows='3',$step='',$list=[],$llgn='R',$bord='',$ftop='20px;');
    htm_Input($labl='@htm_Input(barc)',$plho='',               $icon='',$hint='@Demo of htm_Input Field type barc: shown with font barcode',        $type='barc',$name='barc',$valu='BARCODE',   $form='',$wdth='', $algn='center',$attr='',$rtrn= false,$unit='');
    htm_Input($labl='@htm_Input(html)',$plho='<div>...</div>', $icon='',$hint='@Demo of htm_Input Field type html: Multi-line formatted html-text', $type='html',$name='html',$valu='',          $form='',$wdth='', $algn='left',$attr='',$rtrn= false,$unit='',$disa=false,$rows='3');
    htm_Input($labl='@htm_Input(area)',$plho='Enter...',       $icon='',$hint='@Demo of htm_Input Field type area: Multi-line text',                $type='area',$name='area',$valu='',          $form='',$wdth='100px', $algn='left',$attr='',$rtrn= false,$unit='',$disa=false,$rows='6');
        
    htm_Input($labl='@htm_Input(chck)',$plho='Enter...',       $icon='',$hint='@Demo of htm_Input Field type chck: Multi-line formatted chck-text', $type='chck',$name='chck1',$valu='',         $form='',$wdth='', $algn='left',$attr='',$rtrn= false,$unit='',$disa=false,$rows='3',$step='',$list= [
    ['pos1','@private','@Details about private'],
    ['pos2','@proff','@Details about profession'],
    ['pos3','@private','@Details about private'],
    ['pos4','@hobby','@Details about hobby','checked'],
    ['pos5','@private','@Details about private'],
    ]);
    
    htm_Input($labl='@htm_Input(rado)',$plho='Enter...',       $icon='',$hint='@Demo of htm_Input Field type radio',                                $type='rado',$name='rad1',$valu='',         $form='', $wdth='', $algn='left',$attr='',$rtrn= false,$unit='',$disa=false,$rows='2',$step='',$list= [
    ['post1','private','@private'],
    ['post2','proff','@profession'],
    ['post3','private','@private','checked'],
    ['post4','hobby','@hobby'],
    ['post5','private','@private'],
    ]);
    htm_Input($labl='@htm_Input(rang)',$plho='',        $icon='', $hint='@Demo of htm_Input Field type range: 0..50 ',    $type='rang',$name='rang',$valu='10', $form='', $wdth='', $algn='left',$attr=' min="0" max="50"',$rtrn= false,$unit='',$disa=false,$rows='1',$step='');
    htm_Input($labl='@htm_Input(chck)',$plho='Enter...',$icon='', $hint='@Demo of htm_Input Field type checkbox in a row',$type='chck',$name='chcka',$valu='',  $form='', $wdth='', $algn='left',$attr='',                 $rtrn= false,$unit='',$disa=false,$rows='1',$step='',$list= [
    ['postc','dark','@Dark','checked'],
    ['postd','shiny','@Shiny'],
    ]);
    htm_Input($labl='@htm_Input(rado)',$plho='Enter...',$icon='', $hint='@Demo of htm_Input Field type radio in a row',   $type='rado',$name='rad2',$valu='',  $form='', $wdth='', $algn='left',$attr='',                 $rtrn= false,$unit='',$disa=false,$rows='1',$step='',$list= [
    ['posta','happy','@Happy','checked'],
    ['postb','sorry','@Sorry'],
    ]);
    htm_nl(2);
//  htm_Input($labl='',$plho='@Enter...',$icon='',$hint='',$type= 'text',$name='',$valu='',$form='',$wdth='',$algn='left',$attr='',$rtrn= false,$unit='',$disa=false,$rows='2',$step='',$list=[],$llgn='R',$bord='',$ftop='');
    htm_Input($labl='@htm_Input(colr)',$plho='', $icon='',$hint='@Demo of htm_Input Field type color', $type='colr',$name='colr',$valu='#0000ff', $form='',$wdth='100px', $algn='left',  $attr='',$rtrn= false,$unit='',$disa=false,$rows='1',$step='');
    htm_Input($labl='@htm_Input(butt)',$plho='', $icon='',$hint='@Demo of htm_Input Field type butt',  $type='butt',$name='butt',$valu='BUTTON',  $form='',$wdth='100px', $algn='center',$attr='',$rtrn= false,$unit='',$disa=false,$rows='1',$step='');
    htm_Input($labl='@htm_Input(sear)',$plho='?',$icon='',$hint='@Demo of htm_Input Field type search',$type='sear',$name='sear',$valu='',        $form='',$wdth='',        $algn='left',  $attr='',$rtrn= false,$unit='',$disa=false,$rows='1',$step='');
    htm_Input($labl='@htm_Input(time)',$plho='', $icon='',$hint='@Demo of htm_Input Field type time',  $type='time',$name='time',$valu='',        $form='',$wdth='',        $algn='left',  $attr='',$rtrn= false,$unit='',$disa=false,$rows='1',$step='');
    htm_Input($labl='@htm_Input(week)',$plho='', $icon='',$hint='@Demo of htm_Input Field type week',  $type='week',$name='week',$valu='',        $form='',$wdth='',        $algn='left',  $attr='',$rtrn= false,$unit='',$disa=false,$rows='1',$step='');
    htm_Input($labl='@htm_Input(mont)',$plho='', $icon='',$hint='@Demo of htm_Input Field type month', $type='mont',$name='mont',$valu='',        $form='',$wdth='',        $algn='left',  $attr='',$rtrn= false,$unit='',$disa=false,$rows='1',$step='');
    htm_Input($labl='@htm_Input(file)',$plho='', $icon='',$hint='@Demo of htm_Input Field type file',  $type='file',$name='file',$valu='',        $form='',$wdth='',        $algn='left',  $attr='',$rtrn= false,$unit='',$disa=false,$rows='1',$step='');
    htm_Input($labl='@htm_Input(imag)',$plho='', $icon='',$hint='@Demo of htm_Input Field type image', $type='imag',$name='imag',$valu='',        $form='',$wdth='',        $algn='left',  $attr='',$rtrn= false,$unit='',$disa=false,$rows='1',$step='');
    if (USEGRID) echo '</div>'; // grid-container}
    htm_Panel_00( $labl='@Save', $icon='', $hint='@Just demo !', $name='', $form='',$subm=false, $attr='', $akey='', $kind='save', $simu=false);
    
htm_Page_00();
?>