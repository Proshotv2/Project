<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Management Suite 1.0</title>

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
        <link href="registration.css" type="text/css" rel="stylesheet" />
        <h2>Add Employee</h2>
            
            <form name="Employee" action="db_connect.php" method="POST" enctype="multipart/form-data" >
            	<div class="container">
                	<div class="form_group">
                    	<label>First Name:</label>
                        <input type="text" placeholder="First Name" value="" name="first" required />
                    </div>
                    <div class="form_group">
                    	<label>Last Name:</label>
                        <input type="text" placeholder="Last Name" value="" name="last" required />
                    </div>
                    <div class="form_group">
                    	<label>Employee ID:</label>
                        <input type="text" placeholder="Employee ID" value="" name="id" required />
                    </div>
                    <div class="form_group">
                    	<label>Incidents:</label>
                        <input type="text" placeholder="Incidents" value="" name="incidents" required />
                    </div>
                    <div class="form_group">
                    	<label>Title:</label>
                        <input type="text" placeholder="Title" value="" name="title" required />
                    </div>
                    <div class="form_group">
                    	<label>Company:</label>
                        <input type="text" placeholder="Company" value="" name="company" required />
                    </div>
                    <input type="submit" value=" Submit " name="submit"/>
                </div>
            </form>
            
            
            

            
             
             
        </section>
        
        <aside id="appendix">
            <h2>Appendix on Page with Search</h2>
            
            
            
            
        </aside>
    
        <footer>
            <h4>Footer</h4>
            <p>Footer Text</p>
        </footer>
    
    </div>

</body>
</html>
