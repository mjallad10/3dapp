<?php

class Model{

    public $dbhandle;

    public function __construct(){
        $dsn = 'sqlite:./db/database.db';

        try{
            $this->dbhandle = new PDO($dsn,
                             'user',
                             'password',
                                      array(
                                          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                          PDO::ATTR_EMULATE_PREPARES => false,
                                      ));
        }
        catch (PDOException $e){
            echo "Cannot connect to db.";
            print new Exception($e->getMessage());
        }
    }

    function dbCreateTables(){
        try{
            $this->dbhandle->exec("CREATE TABLE Brands(Id INTEGER PRIMARY KEY,brand TEXT, title TEXT, subtitle TEXT, description TEXT,
                                   modelPageTitle TEXT, modelPageSubtitle TEXT, modelPageDescription TEXT)");
            $this->dbhandle->exec("CREATE TABLE Cards(Id INTEGER PRIMARY KEY,cardName TEXT, title TEXT, subTitle TEXT, text TEXT)");
            return "Tables successfully created";
        }catch (PDOException $e){
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    function dbInsertData(){
        try{
            $this->dbhandle->exec(
                "INSERT INTO Brands (Id, brand, title, subtitle, description, modelPageTitle, modelPageSubtitle, modelPageDescription)
                 VALUES (1,
                         'coke',
                         'Coca Cola',
                         'New York Harbour, 1886',
                         'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special.',
                         'History of Coca Cola',
                         'Atlanta Beginnings',
                         'It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs Pharmacy put it on sale for five cents (about 3p) a glass.'
                         );".

                "INSERT INTO Brands (Id, brand, title, subtitle, description, modelPageTitle, modelPageSubtitle, modelPageDescription)
                 VALUES (2,
                         'sprite',
                         'Sprite',
                         'West Germany, 1961',
                         'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the worlds leading lemon and lime flavoured soft drink and is sold in more than 190 different countries.Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.',
                         'Sprite — Fanta Klare Zitrone',
                         'First introduced in 1961',
                         'Crisp, refreshing, clean-tasting Sprite is now the worlds leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of Coca Colas no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.'
                        );".

                "INSERT INTO Brands (Id, brand, title, subtitle, description, modelPageTitle, modelPageSubtitle, modelPageDescription)
                 VALUES (3,
                         'pepper',
                         'Dr Pepper',
                         'Texas 1885',
                         'Dr Peppers unique, sparkling blend of 23 fruit flavours has been around for well over a century and its still the same, with that distinctive flavour you just cant quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885.',
                         'Dr Pepper — Liquid Sunshine',
                         '23 fruit flavours',
                         'Dr Peppers unique, sparkling blend of 23 fruit flavours has been around for well over a century and its still the same, with that distinctive flavour you just cant quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.'                        );".

                "INSERT INTO Brands (Id, brand, title, subtitle, description, modelPageTitle, modelPageSubtitle, modelPageDescription)
                 VALUES (4,
                         'fanta',
                         'Fanta',
                         'Germany 1940',
                         'During the Second World War, the US established a trade embargo against Nazi Germany, making the export of Coca-Cola syrup difficult. To circumvent this, Max Keith, the head of Coca-Cola Deutschland, decided to create a new product for the German market, using only ingredients available in Germany at the time, including beet sugar, whey, and apple pomace—the leftovers of leftovers, as Keith later recalled.',
                         'Fanta',
                         'Over 200 Flavours Worldwide',
                         'Created by Coca-Cola Deutschland under the leadership of German businessman Max Keith. There are more than 200 flavors worldwide. Fanta originated in Germany as a Coca-Cola substitute in 1940 due to the American trade embargo of Nazi Germany which affected the availability of Coca-Cola ingredients. Fanta soon dominated the German market with three million cans sold in 1943. The current formulation of Fanta was developed in Italy in 1955.'
                        );"
                );
            $this->dbhandle->exec(
                "INSERT INTO Cards (Id, cardName, title, subTitle, text)
                 VALUES (1,
                         'mainPage',
                         'Coca Cola Great Britain', 
                         'Founded in 1886 by Dr John S Pemberton', 
                         'The Coca Cola Company is the worlds leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.');" .

                "INSERT INTO Cards (Id, cardName, title, subTitle, text)
                 VALUES (2,'gallery',
                         '3D Image Gallery',
                         ' ',
                         '3D images rendered using 3DS Max and Blender');".

                "INSERT INTO Cards (Id, cardName, title, subTitle, text)
                 VALUES (3,'camera',
                         'Camera Views',
                         ' ',
                         'Use these buttons to adjust the camera view for the 3D preview');".

                "INSERT INTO Cards (Id, cardName, title, subTitle, text)
                 VALUES (4,'animation',
                         'Animation',
                         ' ',
                         'Use this button to start and stop the animation');".

                "INSERT INTO Cards (Id, cardName, title, subTitle, text)
                 VALUES (5,'modelType',
                         'Model Type',
                         ' ',
                         'Use these buttons to switch the model type');".

                "INSERT INTO Cards (Id, cardName, title, subTitle, text)
                 VALUES (6,'lighting',
                         'Lighting',
                         ' ',
                         'Use this slider to adjust the lighting intensity');"

            );
            return "Data inserted into database";
        }catch (PDOException $e){
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    function dbGetData(){
        try{
            $sql = 'SELECT * FROM Brands';
            $stmt = $this->dbhandle->query($sql);
            $result = NULL;
            $i =-0;
            while ($data = $stmt->fetch()){
                $result['brands'][$data['brand']]['brand'] = $data['brand'];
                $result['brands'][$data['brand']]['title'] = $data['title'];
                $result['brands'][$data['brand']]['subtitle'] = $data['subtitle'];
                $result['brands'][$data['brand']]['description'] = $data['description'];
                $result['brands'][$data['brand']]['modelPageTitle'] = $data['modelPageTitle'];
                $result['brands'][$data['brand']]['modelPageSubtitle'] = $data['modelPageSubtitle'];
                $result['brands'][$data['brand']]['modelPageDescription'] = $data['modelPageDescription'];
                $i ++;
            }
            $sql = 'SELECT * FROM Cards';
            $stmt = $this->dbhandle->query($sql);
            $i =-0;
            while ($data = $stmt->fetch()){
                $result['cards'][$data['cardName']]['cardName'] = $data['cardName'];
                $result['cards'][$data['cardName']]['title'] = $data['title'];
                $result['cards'][$data['cardName']]['subTitle'] = $data['subTitle'];
                $result['cards'][$data['cardName']]['text'] = $data['text'];
                $i ++;
            }
        }catch (PDOException $e){
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        return $result;
    }
}
?>
