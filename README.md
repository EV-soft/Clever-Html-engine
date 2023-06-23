# php2html.lib = Clever-Html-Engine
The fast track to build UI components in a good web applications.

<i>php2html.lib.php</i> is a PHP library with functions that generates HTML pages and elements.

If you program html output in php, you can use this library's routines to generate the html code.
	
HTML elements INPUT / CHECKBOX / RADIO-GROUP / TABLE and many others, generated from PHP-functions.
all combined with: **Label**, **ToolTip**, **Placeholder**, dimensions and others.

Included translate system. Font-awesome icons.
Extended TABLE functions based on Mottie Tablesorter-system.
	
Standards: PHP7+/PHP8+, HTML5, CSS3, JavaScript.

Source must be in UTF-8, with no tabs, indent: 4 chars

When using <i>PHP2HTML</i> your code will be more compact, and easier to read, and you can have both backend ond frontend code in one file.

<i>As an example this height level PHP-code:</i>

	PHP7:
    htm_Input($type='dec2',$name='dec2',$valu=$dec2, $labl='@htm_Input(Dec2)',
              $hint='@Demo of htm_Input Field type dec2: number with 2 decimal', $plho='', $wdth='',$algn='center',$unit='<$ ');
or

	PHP8+:
    htm_Input(type:'dec2',name:'dec2',valu:$dec2, labl:'@htm_Input(Dec2)',
              hint:'@Demo of htm_Input Field type dec2: number with 2 decimal',algn:'center',$unit='<$ ');


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


<h3><b>Integrated benefits of the system:</b></h3>
<ul>
<li>Advanced translation system</li>
<li>Block-oriented provides compact code</li>
<li>Possibility of Font-awesome Icons anywhere</li>
<li>Hints/Tooltip for all html elements</li>
<li>Compact layout with advanced collapsible cards</li>
<li>Option for user defined system blocks</li>
<li>Advanced tables based on Mottie Table Sorter system</li>
<li>TinyMCE integrated HTML-editor library</li>
<li>Optional use of libraries locally or on the Web (CDN)</li>
<li>Narrow cards suitable for adaptive adaptation</li>
<li>Easily enter dates with browsers date picker interface</li>
</ul>

<h3><b>How to start your first project</b></h3>

Save system-files on your web-server in system-folder '{public-URL}/hello'

Create project-folder '/world' and create the file: '{public-URL}/hello/world/first.page.php' with this content:
<pre><code>< ? 
$GLOBALS["ØProgRoot"]= '../';
require_once ('../php2html.lib.php');
htm_Page_0(titl:'DEMO', info:lang('@PHP2HTML: My first page'), imag:'../_accessories/_background.png, attr:');
    htm_Caption(labl:'HELLO WORLD:', hint:'', algn:'center',styl:'color:#550000; font-weight:600; font-size: 18px;');
    htm_nl(2);
    htm_TextDiv(body:'This page is build with PHP2HTML', algn:'center', styl:'box-shadow: 3px 3px 6px 0px #ccc; padding: 5px; border: solid 1px lightgray;', attr:'background-color: white;');
htm_Page_00()
?>
</code></pre>
(Correct: '< ?' to '<?' in the first line)

Now you can see the page in your browser at URL: '{public-URL}/hello/world/first.page.php'

Advanced example - see files in folder: '{public-URL}/hello/Proj.demo/'
 
<h3><b>More information...</b></h3>

You can see descriptions and a demo and try the functions here: https://ev-soft.github.io/Clever-Html-Engine/


<h3><b>Demo:</b></h3>

Get inspired and test the system.

Go to the full window demo and see advanced example: [CustomerOrder](https://ev-soft.work/p2h/v1.3.0/Proj.demo/CustomerOrder.page.php)

Use the top menu to view documentation and examples.

<p style="text-align: center;"><b>

                      PHP is the language to make server-side backend programming.

            PHP2HTML is your tool/framework to make your client-side frontend programming in PHP.
</b></p>
