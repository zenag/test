<?php
session_start();
/**
 * Class Home
 *
 * Default controller to capture Anonymous user data
 *
 * 
 */
class Home extends Controller
{
    
    /**
    *
    * Index method
    * show user form to allow anonymous to capture information
    * unique token is generated for user form to avoid csrf attack
    * @params null
    * renders form preview page for confirmation
    */
    public function index()
    {
        
        // load token,footer and header template
        $this->loadView();
        if (isset($_POST["form_add"])) {
            try
            {
                // Run CSRF check, on POST data, in exception mode, for 10 minutes, in one-time mode.
                NoCSRF::check( 'csrf_token', $_POST, true, 60*10, false );
                // form parsing, DB inserts, etc.
                $_SESSION['csrf_csrf_token'] = null;
                error_log("CSRF check passed. Form parsed and redirected to preview page.");
                $csrftokenpreview = NoCSRF::generate( 'csrf_token_preview' );
                require 'application/views/home/preview.php';
                
            }
            catch ( Exception $e )
            {
                // CSRF attack detected
                $result = $e->getMessage() . ' Form ignored.';
                error_log($result);
                unset($_POST);
                header('location: ' . URL );
            }
        }
        else
        {
            $csrftoken = NoCSRF::generate( 'csrf_token' );
            require 'application/views/home/index.php';
        }
        
        
    }
    /**
    *
    * addUser method
    *  function is used to insert user data into database
    *  data is passed form preview form and inserted into database table
    *  @params null
    *  return to home page after sucessfull insertion
    */
    public function addUser (){
        $this->loadView();
        if (isset($_POST["form_preview"])) {
            try
            {
                // Run CSRF check, on POST data, in exception mode, for 10 minutes, in one-time mode.
                NoCSRF::check( 'csrf_token_preview', $_POST, true, 60*10, false );
                
                $songs_model = $this->loadModel('UserModel');
                $songs_model->addUser(serialize($_POST));
                $_SESSION['csrf_token_preview'] = null;
                $result = 'User details sucessfully added to database!'; 
                error_log($result);
                $this->setFlash("user_add","User added sucessfully!");
                header('location: ' . URL );
            }
            catch ( Exception $e )
            {
                // CSRF attack detected
                $result = $e->getMessage() . ' Form ignored.';
                error_log($result); 
                unset($_POST);
                header('location: ' . URL );
            }
            
        }
        
    }

}
