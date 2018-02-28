<?php

use Slim\Http\Request;
use Slim\Http\Response;
use simplon\dao\DaoPerson;
use simplon\dao\DaoArticle;
use simplon\entities\Person;
use simplon\entities\Article;
use \Mailjet\Resources;

// Routes
$app->get('/', function (Request $request, Response $response, array $args) {
    if(!$_SESSION['user']) {

    }
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    //var_dump($_SESSION["user"]);
    // Render index view
    return $this->view->render($response, 'index.twig', [
        'user' => $_SESSION['user'],
        'is_logged' => $_SESSION["is_logged"]
        ]);
});
$app->get('/login', function (Request $request, Response $response, array $args) {
    //var_dump($_SESSION["is_logged"]);
    if(!$is_logged){
        $daos = new DaoArticle();
        $all = $daos->getByCompareId($_SESSION["id"]);
        
        return $this->view->render($response, 'login.twig',[
            'is_logged' => $_SESSION["is_logged"],
            'email' => $_SESSION["email"],
            'name' => $_SESSION["name"],
            'all'=>$all,
            'id'=>$_SESSION["id"]
        ]);  

    }
    else{
        echo("non trouvé");
        return $this->view->render($response, 'index.twig');
        
    }
    
})->setName('login');

$app->post('/login', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/login' route");
    $body = $request->getParsedBody();
    //var_dump($body);
    $dao = new DaoPerson();
    $user = $dao->getByEmail($body['email']);
    //var_dump($user);
    if(isset($user)){
    $mail = $user->getEmail();
    $pass = $user->getPassword();
    $id = $user->getId();
    $name = $user->getName();
    $body['is_logged'] = ($body['email'] === $mail && sha1(htmlspecialchars(trim($body['password']))) === $pass);
    $_SESSION["user"]=$user;
    $_SESSION["id"]=$id;
    $_SESSION["email"]=$body["email"];
    $_SESSION["is_logged"]= $body['is_logged'];
    $_SESSION["name"]=$name;
    // var_dump($id);
    //echo("mon id de personne".$id);
    $daos = new DaoArticle();
    // $all = $daos->getAll();
    //var_dump($all);
     $all = $daos->getByCompareId($_SESSION["id"]);
    return $this->view->render($response, 'login.twig',[
        'is_logged' => $_SESSION["is_logged"],
        'email' => $_SESSION["email"],
        'name' => $_SESSION["name"],
        'all'=>$all,
        'id'=>$id
    ]);
    
    }else{
        // echo ("Cet utilisateur n'existe pas");
        $nouv = "Cet utilisateur n'existe pas"; 
        //session_destroy();
        return $this->view->render($response, 'index.twig',[  //  à remettre en      view->render   une fois que ca soit twig 
            'nouv' => $nouv
        ]);
    }
    // $personne= new Person( $body['name'],new DateTime($body['birthdate']),$body['email'],$body['password'] );
    // $dao->add($personne);
    //echo ("lololoo".$body['birthdate']);
    // $body['is_logged'] = ($body['email'] === 'toto@gmail.com' && $body['password'] === 'pass');

   // return $this->renderer->render($response, 'login.phtml', $body);
});
//->setName('login');
$app->get('/log', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/log' route");
    $body = $request->getParsedBody();
    
    $body['is_logged'] = ($body['email'] === 'toto@gmail.com' && $body['password'] === 'pass');
    
    return $this->view->render($response, 'inscription.twig', $body);
});
$app->post('/insc', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/insc' route");
    $body = $request->getParsedBody();
    $dao = new DaoPerson();

    $characts = 'abcdefghijklmnopqrstuvwxyz'; $characts .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; $characts .= '1234567890'; $code_aleatoire = ''; for($i=0;$i < 30;$i++) //10 est le nombre de caractères 
    { $code_aleatoire .= substr($characts,rand()%(strlen($characts)),1); }
     

    $personne= new Person( $body['name'],new DateTime($body['birthdate']),$body['email'],$code_aleatoire, $body['nameblog'], $body['resumeblog']);
    $emails = $body['email'];  
    $personnes=$dao->getByEmail($body['email']);
    // var_dump($personnes);
    if(!isset($personnes)){
        $nouveau = "Vous etes bien inscrit! Confirmez votre email pour vous connecter.";       
        
        $dao->add($personne);

        $apikey = $_ENV['MJ_APIKEY_PUBLIC'];
        $apisecret = $_ENV['MJ_APIKEY_PRIVATE'];
         
        $mj = new \Mailjet\Client($apikey, $apisecret);
        
                    $body = 
                        [
                            'FromEmail' => "naraouf@hotmail.com",
                            'FromName' => "BricoBlog",
                            'Subject' => "Votre email de confirmation",
                            'Text-part' => "Cher Utilisateur, bienvenu sur BricoBlog! Le blog de tous les bricoleurs!",
                            'Html-part' => "<h3> Bonjour,<br/> veuillez vous connecter la première fois avec ce mot de passe pour confirmer votre émail:</h3> <br/><h1> $code_aleatoire</h1><br/>Vous pourrais changer votre mot de passe une fois connecté sur le site en vous rendant dans l'onglet <h3>Mon profil</h3>!",
                            'Recipients' => [
                                [
                                    'Email' => "$emails"  //mettre $email ici apres une fois les testes terminés
                                ]
                            ]
                    ];
                    $responsem = $mj->post(Resources::$Email, ['body' => $body]);
                    
                //     echo '<pre>';
                //     var_dump($responsem);
                // echo '</pre>';



    }
    else{
        
        $nouveau = "Cet email est déjà existant !";
        // echo("ouioui");
    } 
    
    
    //echo ("lololoo".$body['birthdate']);

    // $body['is_logged'] = ($body['email'] === 'toto@gmail.com' && $body['password'] === 'pass');

    return $this->view->render($response, 'index.twig', [
        'body' => $_SESSION['body'],
        'user' => $_SESSION['user'],
        'nouveau' => $nouveau,
        
        

    ]);
});

//------------------------------------------------




$app->post('/addarticle', function (Request $request, Response $response, array $args) {
    //On récupère les données du formulaire
    $form = $request->getParsedBody();
    // var_dump($form);
    //On crée une article à partir de ces données
    $newarticle = new Article($form['titre'],$form['message']);
    //var_dump($newarticle);
    //On instancie le DAO
    $dao = new DaoArticle();
    //On utilise la méthode add du DAO en lui donnant l'article qu'on vient de créer
    $dao->add($newarticle);
    
    $all = $dao->getByCompareId($_SESSION["id"]);
    
    
    return $this->view->render($response, 'login.twig', [
        'newId' => $newarticle->getId(),
        'is_logged' => $_SESSION["is_logged"],
        'email' => $_SESSION["email"],
        'all'=>$all,
    ]);
})->setName('addarticle');


$app->get('/update/{id}', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/' route");
    
    $dao = new DaoArticle();
    $pers = $dao->getById($args["id"]);
    //var_dump($pers);
    //var_dump($args["id"]);
  
    return $this->view->render($response, 'update.twig', [
        'variable' => 'Yes It works',
        //'all'=>$all,
        'pers'=>$pers,
        'succes'=> "article ajouté avec succé",
        'id'=>$_SESSION["id"],
        'is_logged' => $_SESSION["is_logged"],
    ]);
})->setName('update');


$app->post('/update/{id}', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/' route");
    $body = $request->getParsedBody();
    $dao = new DaoArticle();
    $pers = $dao->getById($args["id"]);
    //var_dump($pers);

    $pers->setTitre($body['titre']);
    $pers->setMessage($body['message']); 
    $dao->update($pers);

    //$all = $dao->getAll();
    $redirectUrl = $this->router->pathFor('login');
    return $response->withRedirect($redirectUrl);

    // return $this->view->render($response, 'login.twig'
    // , [
        
    //     'is_logged' => $_SESSION["is_logged"],
    //     'email' => $_SESSION["email"],
    //     'all'=>$all
    // ]
// );
})->setName('update');

$app->get('/delete/{id}', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/' route");
    $body = $request->getParsedBody();
    $dao = new DaoArticle();
    $pers = $dao->getByID($args["id"]);
    //var_dump($pers);
    $dao->delete($pers);
    // $all = $dao->getAll();
    //return $this->view->render($response, 'login.twig', $body);

    $redirectUrl = $this->router->pathFor('login');
    return $response->withRedirect($redirectUrl
    // ,
    // [
    //     'is_logged' => $_SESSION["is_logged"],
    //     'email' => $_SESSION["email"],
    //     'all'=>$all
    // ]
 );
})->setName('delete');

$app->get('/liste', function (Request $request, Response $response, array $args) {
    //var_dump($_SESSION["is_logged"]);
    
    if(!$is_logged){
        $daos = new DaoPerson();
        $all = $daos->getAll();
        //var_dump($all);
        
        return $this->view->render($response, 'listeblogs.twig',[
            'is_logged' => $_SESSION["is_logged"],
            'email' => $_SESSION["email"],
            'all'=>$all,
            'id'=>$_SESSION["id"]
        ]);
    

    }
    else{
        echo("non trouvé");
    }
    
})->setName('liste');



$app->get('/blogvisite/{id}', function (Request $request, Response $response, array $args) {
    //var_dump($_SESSION["is_logged"]);
    if(!$is_logged){
        //echo($args["id"]);
        $daos = new DaoArticle();
        $all = $daos->getByCompareId($args["id"]);
        // var_dump($all);
        

        
        
        return $this->view->render($response, 'blogvisite.twig',[
            'is_logged' => $_SESSION["is_logged"],
            'nameV' => $_SESSION["nameV"],
            'messageV' => $_SESSION["messageV"],
            'titreV' => $_SESSION["titreV"],
            'all'=>$all,
            'id'=>$_SESSION["id"]
        ]);  

    }
    else{
        echo("non trouvé");
    }
    
})->setName('blogvisite');

$app->get('/deconnexion', function (Request $request, Response $response, array $args) {
    //var_dump($_SESSION["is_logged"]);
    $nouveau = "A très bientôt sur M.BricoDeco!";
    if($_SESSION["is_logged"]){
        // $daos = new DaoPerson();
        // $all = $daos->getAll();
        unset($_SESSION["user"]);
        session_destroy();
        //var_dump($_SESSION["user"]);
        //var_dump($all);
        
        return $this->view->render($response, 'index.twig'
        ,[
            'is_logged' => $_SESSION["is_logged"],
            'nouveau'=>$nouveau
            
        ]
    );
    

    }
    else{
        echo("déjà deconnecté");
    }
    
    // // Sample log message
    // $this->logger->info("Slim-Skeleton '/' route");
    // // Render index view
    // return $this->renderer->render($response, 'index.phtml', $args);
})->setName('deconnexion');

$app->get('/updateprofil/{id}', function (Request $request, Response $response, array $args) {
    $this->logger->info("Slim-Skeleton '/' route");
    
    $dao = new DaoPerson();
    $pers = $dao->getById($args["id"]);
    //var_dump($pers);
    //var_dump($args["id"]);
  
    return $this->view->render($response, 'updateprofil.twig', [
        'variable' => 'Yes It works',
        'is_logged' => $_SESSION["is_logged"],
        //'all'=>$all,
        'pers'=>$pers,
        'succes'=> "article ajouté avec succé",
        'id'=>$_SESSION["id"]
    ]);
})->setName('updateprofil');


$app->post('/updateprofil/{id}', function (Request $request, Response $response, array $args) {
    
    $this->logger->info("Slim-Skeleton '/' route");
    $body = $request->getParsedBody();
    $dao = new DaoPerson();
    $pers = $dao->getById($args["id"]);
    //var_dump($pers);
    
    $pers->setName($body['name']);
    $pers->setPassword(sha1(htmlspecialchars(trim($body['password']))));
    $pers->setNameblog($body['nameblog']);
    $pers->setResumeblog($body['resumeblog']); 
    $dao->update($pers);

    //$all = $dao->getAll();
    $redirectUrl = $this->router->pathFor('login');
    return $response->withRedirect($redirectUrl);
   
})->setName('updateprofil');


$app->post('/search', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/search' route");
    $body = $request->getParsedBody();
    //var_dump($body);
    $dao = new DaoPerson();
    $blog = $dao->getByNameblog($body['nameblog']);
    //var_dump($blog);
    $daos = new DaoArticle();
    $blogs = $daos->getByTitre($body['nameblog']);
    $blogW = $daos->getByWord($body['nameblog']);
    
    if(isset($blog) || isset($blogs) || isset($blogW)){
        if(isset($blog)){
          $mail = $blog->getEmail(); 
    //var_dump($mail);   
    $pass = $blog->getPassword();
    $id = $blog->getId();
    //var_dump($id);
    $name = $blog->getName();
    $nameblog = $blog->getNameblog();   
        }
    //**********

    // $daos = new DaoArticle();
    // $blogs = $daos->getByTitre($body['nameblog']);
    if(isset($blogs)){
    $titre = $blogs->getTitre();
    $message = $blogs->getMessage();
    $idA= $blogs->getId();  
    }
    // if(isset($blogW)){
    //     $titreW = $blogW->getTitre();
    //     $messageW = $blogW->getMessage();
    //     $idW= $blogW->getId();  
    //     }
    

    //var_dump($nameblog);
    
    if($body['nameblog'] == $nameblog){
        if(!$is_logged){
            //echo($args["id"]);
            $daos = new DaoArticle();
            $all = $daos->getByCompareId($id);
            //var_dump($all); 
            //echo('okokokokoko');

            return $this->view->render($response, 'blogvisite.twig',[
                'is_logged' => $_SESSION["is_logged"],
                'nameV' => $_SESSION["nameV"],
                'messageV' => $_SESSION["messageV"],
                'titreV' => $_SESSION["titreV"],
                'all'=>$all,
                'id'=>$_SESSION["id"]
            ]);     
              
                       
              
    
        }else{
            echo("non trouvé");
        }

    }elseif($body['nameblog'] ==$titre){     //**************je ss la
        
        $titre = $blogs->getTitre();
        $message = $blogs->getMessage();
        $idA= $blogs->getId();

        
        
            //echo($args["id"]);
          return $this->view->render($response, 'article.twig',[
                'is_logged' => $_SESSION["is_logged"],
                // 'nameV' => $_SESSION["nameV"],
                'messageA' => $message,
                'titreA' => $titre,
                'all'=>$all,
                'idA'=>$idA
            ]);  
    
        

    }elseif(!empty($blogW)){     //**************je ss la
        
        //  $titrew = $blogW->getTitre();
        // // $messagew = $blogW->getMessage();
        //  $idw= $blogW->getId();
        //  echo('lololo');
        
        // var_dump($blogW);
        
        
        
        
            //echo($args["id"]);
          return $this->view->render($response, 'article.twig',[
                'is_logged' => $_SESSION["is_logged"],
                // 'nameV' => $_SESSION["nameV"],
                'messageA' => $messagew,
                'titreA' => $titrew,
                'blogW'=>$blogW,
                'idA'=>$idw
            ]);  
    
        

    }else{

        // **** icicicicci
        //    select * from articles where message like '%_onjour%'
        // echo ("Cet utilisateur n'existe pas");
        $nouveau= "Le blog ou l'article que vous cherchez n'existe pas"; 
        return $this->view->render($response, 'article.twig',[
            'is_logged' => $_SESSION["is_logged"],
            'email' => $_SESSION["email"],
            'name' => $_SESSION["name"],
            'all'=>$all,
            'nouveau'=>$nouveau
            
        ]);       
    }

    
}

});












