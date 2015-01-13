<!DOCTYPE html>

/**
 * Description of StatsDataBase:
 * Project that parses a given HTML file which contains a table of stats 
 * on basketball players and basketball teams. 
 * 
 * Allows me to save stats in a mySQL database and query and compare different players
 * matched up against different teams.
 * 
 * Helps determine favorable matchups for daily fantasy sports sites.
 *
 * @author Kyle Dosch
 */
 
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="ProjectStyles.css"> 
        <title>Fantasy Match ups</title>
    </head>
    <body>
        <div id="TitleOfPage" >
          <div id="TitleOfPageTextTable" >
                
          </div>    
        </div>
        <?php
        
            $doc = new DOMDocument;
            $doc->preserveWhiteSpace = false;
            //$html = 'test.html';
            @$doc->loadHTMLFile('test2.html');

            //Creates node containing the main table
            $table = $doc->getElementById('table');

            //Creates node containing a row in the table
            $row = $table->getElementsByTagName('tr')->item(0);

            //Creates node refering to columns in the row node, gets unique ID
            $col = $row->getElementsByTagName('td')->item(0);
            echo "Unique ID = ".$col->textContent."\n";
            
       
        ?>
    </body>
</html>
