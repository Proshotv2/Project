<!DOCTYPE HTML>
<html>
	
<head>
<meta charset="utf-8">
<title>HR Project</title>

<link href="main.css" rel="stylesheet" type="text/css">

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>






</head>

<body>

    <div id="pagewrap">
    
    <header id="header2">
        <h1>HR Management</h1>
    </header>
    
        <section id="buttons">
            <h2>Buttons</h2>
            
             <ul class="tabs">
            	<li><a href="#tab1">Tab 1</a></li>
                <li><a href="#tab1">Tab 2</a></li>
                <li><a href="#tab1">Tab 3</a></li>
            </ul>
            
        </section>
        
        <section id="middle">
            <h2>Content for App</h2>
            
           <?php 
			include('db_connect.php');
    	    ?>
            
               <form id="searchform" method="post"> 
    <div> 
            <label for="search_term">Search name/phone</label> 
            <input type="text" name="search_term" id="search_term" /> 
    <input type="submit" value="search" id="search_button" /> 
    </div> 
        </form> 
        <div id="search_results"></div> 

            
             
        </section>
        
        <aside id="appendix">
            <h2>Appendix on Page with Search</h2>
            <p>Content for Search bar</p>
        </aside>
    
        <footer>
            <h4>Footer</h4>
            <p>Footer Text</p>
        </footer>
    
    </div>

</body>
</html>
