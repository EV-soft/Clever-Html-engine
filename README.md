# php2html.lib = Clever-Html-Engine
The fast track to a good web application.

php2html.lib.php is a PHP library of functions that generates HTML pages and elements.

If you program html output in php, you can use this library's routines to generate the html code.
	
HTML elements INPUT / CHECKBOX / RADIO-GROUP / TABLE and many others, generated from PHP-functions.
all combined with: **Label**, **ToolTip**, **Placeholder**, dimensions and others.

Included translate system. Font-awesome icons.
Extended TABLE functions with Mottie Tablesorter-system.
	
Based on PHP7+/PHP8+, HTML5, CSS3.

Source must be in UTF-8, no tabs, indent: 4 chars

When using PHP2HTML your code will be more compact, and easier to read.

<i>As an example this height level PHP-code:</i>

    htm_Input($type='dec2',$name='dec2',$valu=$dec2, $labl='@htm_Input(Dec2)',
              $hint='@Demo of htm_Input Field type dec2: number with 2 decimal', $plho='', $wdth='',$algn='center',$unit='<$ ');


<i>will generate this HTML-code:</i>

    <div class="inpField" id="inpBox" style="width: 200px; margin: auto; display: inline-block;">
       <input type= "text"  id="dec2" name="dec2"  value="$ 54 321,00"  class="boxStyle"
              style="text-align: center; font-size: 14px; font-weight: normal; width: 90%; " 
              oninvalid="this.setCustomValidity('Wrong or missing data in htm_Input(Dec2) ! ')" 
              oninput="setCustomValidity('')"  pattern="^\d*\.?((25)|(50)|(5)|(75)|(0)|(00))?$" />
       <abbr class= "hint">
           <label for="dec2" style="font-size: 12px; ">
                <div style="white-space: nowrap; margin-left:   auto;">htm_Input(Dec2)</div>
           </label>
           <data-hint style="top: 45px; left: 2px;">Demo of htm_Input Field type dec2: number with 2 decimal</data-hint>
       </abbr>
    </div>

and looks like this:

![image](https://user-images.githubusercontent.com/21997911/131254454-3198a243-a1c3-4238-abe7-2fe46b232fc0.png)



<b>How to start your first project</b>

Save system-files on your web-server in system-folder '{public-URL}/hello'

Create project-folder '/world' and create the file: '{public-URL}/hello/world/first.page.php' with this content:
<pre><code>< ? 
$GLOBALS["ØProgRoot"]= '../';
require_once ('../php2html.lib.php');
htm_Page_0( $pageTitl='DEMO', $ØPageImage='../_accessories/_background.png',$align='center',$PgInfo=lang('@PHP2HTML: My first page'));
    htm_Caption($labl='HELLO WORLD:',$style='color:#550000; font-weight:600; font-size: 18px;',$align='center',$hint='');
    htm_nl(2);
    htm_TextDiv($content='This page is build with HTM2PHP',$align='center',$marg='8px',$attr='width:300px; margin:auto; box-shadow: 3px 3px 6px 0px #ccc; padding: 5px; border: solid 1px lightgray; background-color: white; ');
htm_Page_00()
?>
</code></pre>
(Correct: '< ?' to '<?' in the first line)

Now you can see the page in your browser at URL: '{public-URL}/hello/world/first.page.php'

Advanced example - see files in folder: '{public-URL}/hello/Proj.demo/'
 
<b>More information...</b>

You can see descriptions and a demo and try the functions here: https://ev-soft.github.io/Clever-Html-Engine/

For visitors - Need no donation, but bug fixes are very very welcome.
