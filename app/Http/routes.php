<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
|show route list: php artisan route:list
|
*/

/*Route::get('test', function(){
    return view('test_google_map');
});*/


Route::get('sitemap.xml', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
    // by default cache is disabled
    $sitemap->setCache('laravel.sitemap', 60);

    // check if there is cached sitemap and build new only if is not
    if (!$sitemap->isCached())
    {
        // add item to the sitemap (url, date, priority, freq)
        $sitemap->add(URL::to('/'), '2016-06-08', '1.0', 'daily');
        $sitemap->add(URL::to('product'), '2016-06-08', '0.9', 'daily');
        $sitemap->add(URL::to('lien-he'), '2016-06-08', '0.9', 'never');
        $sitemap->add(URL::to('vi-da'), '2016-06-08', '0.9', 'daily');
        $sitemap->add(URL::to('vi-da-nam'), '2016-06-08', '0.9', 'daily');
        $sitemap->add(URL::to('vi-da-nu'), '2016-06-08', '0.9', 'daily');
        $sitemap->add(URL::to('day-lung'), '2016-06-08', '0.9', 'daily');
        $sitemap->add(URL::to('tui-da'), '2016-06-08', '0.9', 'daily');
        $sitemap->add(URL::to('tin-tuc'), '2016-06-08', '0.9', 'daily');
        $sitemap->add(URL::to('gio-hang'), '2016-06-08', '0.9', 'daily');

        // add item with translations (url, date, priority, freq, images, title, translations)
//        $translations = [
//            ['language' => 'fr', 'url' => URL::to('pageFr')],
//            ['language' => 'de', 'url' => URL::to('pageDe')],
//            ['language' => 'bg', 'url' => URL::to('pageBg')],
//        ];
//        $sitemap->add(URL::to('pageEn'), '2015-06-24T14:30:00+02:00', '0.9', 'monthly', [], null, $translations);

        // add item with images
//        $images = [
//            ['url' => URL::to('images/pic1.jpg'), 'title' => 'Image title', 'caption' => 'Image caption', 'geo_location' => 'Plovdiv, Bulgaria'],
//            ['url' => URL::to('images/pic2.jpg'), 'title' => 'Image title2', 'caption' => 'Image caption2'],
//            ['url' => URL::to('images/pic3.jpg'), 'title' => 'Image title3'],
//        ];
//        $sitemap->add(URL::to('post-with-images'), '2015-06-24T14:30:00+02:00', '0.9', 'monthly', $images);

        // get all posts from db
        $items = DB::table('items')->orderBy('created_at', 'desc')->get();

        // add every post to the sitemap
        foreach ($items as $item)
        {
            $sitemap->add($item->name_url, $item->updated_at, '0.1', 'daily');
        }
    }

    // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
    return $sitemap->render('xml');

    // this will generate file mysitemap.xml to your public folder
    //return $sitemap->store('xml', 'mysitemap');

});

Route::get('/', 'HomeController@index');

Route::get("product", "ProductController@index");
Route::get("lien-he", "ContactController@index");

// vida
Route::get("vi-da", "ProductController@vida");
Route::get("vi-da-nam", "ProductController@vidanam");
Route::get("vi-da-nu", "ProductController@vidanu");
Route::get("day-lung", "ProductController@daylung");
Route::get("tui-da", "ProductController@tuida");

Route::get("tin-tuc", "NewsController@index");

Route::get("gio-hang", "CartController@index");
Route::post("gio-hang", "CartController@index");

Route::get("{item_url}", "ProductController@product_detail");
Route::post("{item_url}", "ProductController@product_detail");









Route::get("user", "UserController@profile")->name('user.profile');

Route::get("search", "SearchController@index");


$this->get('backend/login', 'A_LoginController@index');
$this->post('backend/login', 'Auth\AuthController@login');
$this->post('backend/login', 'A_LoginController@authenticate');
$this->get('backend/logout', 'A_LoginController@logout');

Route::get("backend/dashboard", 'A_DashboardController@index');


/***************    Working routes  **********************************/

Route::group(['prefix' => 'backend/w', 'middleware' => ['auth', 'web']], function() {

    //ajax
    Route::get("ajax/make_to_call", "AjaxController@make_to_call")->name('backend.w.ajax.make_to_call');
    Route::get("ajax/change_queue_status", "AjaxController@change_queue_status")->name('backend.w.ajax.change_queue_status');
    Route::get("ajax/receive_income_call", "AjaxController@receive_income_call")->name('backend.w.ajax.receive_income_call');
    Route::get("ajax/notification_income_call", "AjaxController@notification_income_call")->name('backend.w.ajax.notification_income_call');

    // Contact
    Route::get('contact/ajax_edit/{id}', 'Working\W_ContactController@ajax_edit')->name('backend.w.contact.ajax_edit');
    Route::patch('contact/ajax_edit/{id}', 'Working\W_ContactController@update_ajax_edit')->name('backend.w.contact.update_ajax_edit');

    Route::get('contact/ajax_contact_detail_ticket/{id}', 'Working\W_ContactController@edit_ajax_contact_detail_ticket')->name('backend.w.contact.ajax_contact_detail_ticket');
    Route::patch('contact/ajax_contact_detail_ticket/{id}', 'Working\W_ContactController@update_ajax_contact_detail_ticket')->name('backend.w.contact.ajax_contact_detail_ticket');
    //Route::get('contact', 'Working\W_ContactController@index');
    Route::resource('contact', 'Working\W_ContactController');
    
    
    // Task
    Route::get('task/ajax_list/{contact_id}', 'Working\W_TaskController@ajax_list')->name('backend.w.task.ajax_list');
    Route::get('task/popup_detail/{contact_id}', 'Working\W_TaskController@popup_detail')->name('backend.w.task.popup_detail');
    Route::get('task/ajax_detail/{ticket_id}', 'Working\W_TaskController@ajax_detail')->name('backend.w.task.ajax_detail');
    Route::get('task/ajax_history_list/{ticket_id}', 'Working\W_TaskController@ajax_history_list')->name('backend.w.task.ajax_history_list');
    Route::resource('task', 'Working\W_TaskController');

    // Deal
    Route::get('deal/ajax_list/{contact_id}', 'Working\W_DealController@ajax_list')->name('backend.w.deal.ajax_list');
    Route::get('deal/popup_detail/{contact_id}', 'Working\W_DealController@popup_detail')->name('backend.w.deal.popup_detail');
    Route::get('deal/ajax_detail/{ticket_id}', 'Working\W_DealController@ajax_detail')->name('backend.w.deal.ajax_detail');
    Route::get('deal/ajax_history_list/{ticket_id}', 'Working\W_DealController@ajax_history_list')->name('backend.w.deal.ajax_history_list');
    Route::resource('deal', 'Working\W_DealController');


    // Ticket
    Route::get('ticket/detail', 'Working\W_TicketController@detail');
    Route::get('ticket/contact_detail/{id}', 'Working\W_TicketController@contact_detail');


    // Schedule
    Route::resource('schedule', 'Working\W_ScheduleController');


});


/***************    Admin routes  **********************************/

Route::group(['prefix' => 'backend/a', 'middleware' => 'auth'], function() {

    // Department
    Route::resource('department', 'Administrator\A_DepartmentController'
        //,['except' => ['create', 'store', 'update', 'destroy']]
        //,['only' => ['index', 'show']]
    );
    Route::get('department/delete/{id}', 'Administrator\A_DepartmentController@delete')->name('backend.a.department.delete-department')->where(['id' => '[0-9]+']);

    // Team
    Route::resource('team', 'Administrator\A_TeamController');
    Route::get('team/delete/{id}', 'Administrator\A_TeamController@delete')->name('backend.a.team.delete-team')->where(['id' => '[0-9]+']);


    //User
    Route::resource('user', 'Administrator\A_UserController');
    Route::get('user/delete/{id}', 'Administrator\A_UserController@delete')->name('backend.a.user.delete-user')->where(['id' => '[0-9]+']);

    // Contact Group
    Route::resource('contact_group', 'Administrator\A_ContactGroupController');
    Route::get('contact_group/delete/{id}', 'Administrator\A_ContactGroupController@delete')->name('backend.a.contact_group.delete-contact-group')->where(['id' => '[0-9]+']);

    // Contact
    Route::resource('contact', 'Administrator\A_ContactController');
    Route::get('contact/delete/{id}', 'Administrator\A_ContactController@delete')->name('backend.a.contact.delete-contact')->where(['id' => '[0-9]+']);

    // Campaign
    Route::get('campaign/delete/{id}', 'Administrator\A_CampaignController@delete')->name('backend.a.campaign.delete-campaign')->where(['id' => '[0-9]+']);
    Route::get('campaign/add_contact/{id}', 'Administrator\A_CampaignController@add_contact')->name('backend.a.campaign.add_contact')->where(['id' => '[0-9]+']);
    Route::get('campaign/contact_in_campaign/{id}', 'Administrator\A_CampaignController@contact_in_campaign')->name('backend.a.campaign.contact_in_campaign')->where(['id' => '[0-9]+']);
    Route::post('campaign/add_by_check', 'Administrator\A_CampaignController@add_by_check')->name('backend.a.campaign.add_by_check');
    Route::post('campaign/remove_contact', 'Administrator\A_CampaignController@remove_contact')->name('backend.a.campaign.remove_contact');

    Route::resource('campaign', 'Administrator\A_CampaignController');

    Route::get('inbound/delete/{id}', 'Administrator\A_InboundController@delete')->name('backend.a.inbound.delete-inbound-setting')->where(['id' => '[0-9]+']);
    Route::resource('inbound', 'Administrator\A_InboundController');

    Route::post('user_queue/ajax_search', 'Administrator\A_UserQueueController@ajax_search')->name('backend.a.user_queue.ajax_search');

    // Category
    Route::resource('category', 'Administrator\A_CategoryController');
    Route::get('category/delete/{id}', 'Administrator\A_CategoryController@delete')->name('backend.a.category.delete-category')->where(['id' => '[0-9]+']);

    // Category
    Route::resource('item', 'Administrator\A_ItemController');
    Route::get('item/delete/{id}', 'Administrator\A_ItemController@delete')->name('backend.a.item.delete-item')->where(['id' => '[0-9]+']);

});




Route::get("mycustomer", "CustomerController@customer");

Route::get("mypage", function(){
    $ticket_id = isset($_REQUEST['ticket_id'])? $_REQUEST['ticket_id'] : "";
    $data = array(
        'project_name' => "LARAVEL TEST".$ticket_id,
    );
    return view('mypage', $data);
});


Route::get('hello/{name}', function($name){
   echo "xin chào ".$name;
});

Route::get("customer", function(){
   $customers = App\Customer::all();
    foreach($customers as $customer){
        if(isset($customer)){
            echo "<p>".$customer->name."---- Created By: ". (isset($customer->user) ? $customer->user->name : "")."</p>";
        }

    }

});

//Route::auth();
// Authentication Routes...
//$this->get('login', 'LoginController@index');



//$this->post('login', 'Auth\AuthController@login');
//$this->post('login', 'LoginController@authenticate');
//$this->get('logout', 'LoginController@logout');

//$this->get('register', 'Auth\AuthController@showRegistrationForm');
//$this->post('register', 'LoginController@register');

// Password Reset Routes...
//$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
//$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
//$this->post('password/reset', 'Auth\PasswordController@reset');







