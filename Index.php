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

            for ($i = 1; $i < $row->length; $i++){  
                 
                $pRnk = $row->getElementsByTagName('td')->item(0)->textContent;
                $pName = $row->getElementsByTagName('td')->item(1)->textContent;
                $pPos = $row->getElementsByTagName('td')->item(2)->textContent;
                $pTeam = $row->getElementsByTagName('td')->item(3)->textContent;
                $pRbd = $row->getElementsByTagName('td')->item(4)->textContent;
                $pAst = $row->getElementsByTagName('td')->item(5)->textContent;
                $pStl = $row->getElementsByTagName('td')->item(6)->textContent;
                $pBlk = $row->getElementsByTagName('td')->item(7)->textContent;
                $pTo = $row->getElementsByTagName('td')->item(8)->textContent;
                $pPts = $row->getElementsByTagName('td')->item(9)->textContent;
                
                $row = $table->getElementsByTagName('tr')->item(i);
            }
            
       
        ?>
    </body>
</html>
