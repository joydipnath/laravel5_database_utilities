<?php 

namespace Joydip\Laravel5_database_utilities\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use session;

use Joydip\Laravel5_database_utilities\Database;
use Joydip\Laravel5_database_utilities\Process\BackupProcess;
use Joydip\Laravel5_database_utilities\DatabaseCommandGenerator\Mysql;

use Auth;
use Mail;
use Joydip\Laravel5_database_utilities\Mail\SendBackupMail;
 
class DatabaseController extends Controller {
    
    protected $backupProcess, $Mysql, $sendBackupMail;
    
    public function __construct()
    {
        $this->backupProcess = new BackupProcess();
        $this->Mysql = new Mysql();
//        $this->sendBackupMail =  new SendBackupMail();
    }
    
    public function home() {
        
        $page_title      = 'Laravel Database Manager';
        $welcome_message = 'Welcome! to laravel database manager package';
        $data = array(
            'page_title'       => $page_title,
            'welcome_message'  => $welcome_message,
            'success' => ''
        );
        //$data = compact('page_title', 'welcome_message');
        return view('database::welcome')->with([ 'data' => $data ]);
        
//        return Database::display();
//        return 'The controller works!';
//        return config('database_manager.message');
    }
    
    public function getDump(Request $request){
        
        $db_config =  config('database_manager.mysql');
        $page_title      = 'Laravel Database Manager';
        $welcome_message = 'package dumped';
        
        $dump_cli =  $this->Mysql->getBackupCommand();
        
        if(! $this->backupProcess->process($dump_cli)){
            $welcome_message = 'your package has been successfully saved at your public folder by name - '.config('database_manager.mysql')['file_name'];
        }
        $data = array(
            'page_title'       => $page_title,
            'welcome_message'  => $welcome_message,
            'success' => 'db Dumped'
        );
        
//        $data = array ('name' => 'admin', 'to_email' => config('database_manager.email')['address'] , 'subject' => "Db backup mail", 'email_body' =>'');
//        $path = base_path().'/public'.config('database_manager.mysql')['file_name'] ;
        
//        Mail::to(config('database_manager.email')['address'])->queue(new SendBackupMail($data));
        
//        Mail::send('SendBackupMailTemplate', $data , function($message) use($path){
//            $message->from('admin');
//            $message->to('joy@bigdatalogin.com');
//            $message->subject($request->forward_email_sub);
//            $message->attach($path);
//        });
//        
        // $request->session()->put('success', 'Data dumped');
        
        // $data = compact('page_title', 'welcome_message');
        // return redirect()->back()->with([ 'data' => $data ]);
        return view('database::welcome')->with([ 'data' => $data ]);
    }
}