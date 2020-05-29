 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('logout', function(){ Auth::logout(); return redirect('/'); });

//Main Website Routes 
Route::get('/', 'IndexController@index');
Route::get('news/{city?}', 'IndexController@news');
Route::get('news/author/{author}', 'IndexController@newsByAuthor');
Route::get('read-news/{id}/{title}', 'IndexController@readNews');

Route::get('association/{association?}', 'IndexController@association');

Route::get('blogs/{city?}', 'IndexController@blogs');
Route::get('blogs/author/{author}', 'IndexController@blogsByAuthor');
Route::get('read-blog/{id}/{title}', 'IndexController@readBlog');

Route::get('catalogue/{city?}', 'IndexController@catalogue');

Route::get('blacklist/{category?}', 'IndexController@blacklist');

Route::get('directory/{city?}', 'IndexController@directory');
Route::get('directory-details/{id}/{category?}', 'IndexController@directoryDetails');

Route::get('jobs/{city?}', 'IndexController@job');
Route::get('apply-to-all','IndexController@applyToAll');


Route::get('shop/{city?}', 'IndexController@shop');

//Rate Page
Route::get('rate','IndexController@rate');
Route::post('current-rate','IndexController@currentrate');
Route::Post('rate-notification','IndexController@rateDate'); 

Route::get('contact', 'IndexController@contact');

Route::get('apply-for-job/{id}', 'IndexController@applyForJob')->middleware('auth');/*
Route::post('job-application-submit', 'IndexController@jobApplicationSubmit');*/
Route::get('view-product/{id}', 'IndexController@viewProduct');
Route::get('place-order/{id}', 'IndexController@placeOrder')->middleware('auth');
Route::post('place-order-submit', 'IndexController@placeOrderSubmit')->middleware('auth');
Route::get('thank-you/{order_id}', 'IndexController@thankYou');
Route::get('search', 'IndexController@city');
Route::get('nextPost/{id}', 'IndexController@nextPost');
Route::get('previousPost/{id}', 'IndexController@previousPost');
Route::get('countbutton', 'IndexController@countbutton'); 
Route::post('downloadbutton', 'CatalogueController@downloadButton');

// add qutation form in directory 
Route::post('quotationdirectory', 'IndexController@addQuotationDirectoryForm'); 

// add qutation form in catalogue 
Route::post('quotation', 'IndexController@addQuotationForm');

// rating routes
Route::post('rating', 'DirectoryController@post'); 
Route::post('news-rating', 'NewsBlogController@rating');  
Route::post('shop-rating', 'ShopController@shoprating');   


Route::get('w/{site}', 'IndexController@website');
Route::get('catalogueimage/{id}', 'IndexController@viewcatalogueimage'); 
// Route::get('catalogueimagek/{id}', function($id)
// {
    
//     return redirect('catalogueimage/'.$user); 
// });


Route::post('website-contact-submit', 'IndexController@websiteContactSubmit');

//Routes for Authenticated Users Only

Route::middleware(['auth'])->group(function() {
    
    //job-application-submit
     Route::post('job-application-submit', 'IndexController@jobApplicationSubmit'); 
    //Dashboard Routes
    
    Route::get('dashboard', 'DashboardController@dashboard');

	Route::get('chat', 'ChatController@chat');
	Route::get('contacts', 'ChatController@getContacts');
	Route::get('conversation/{id}', 'ChatController@getMessagesFor');
	Route::post('send-message', 'ChatController@sendMessage');

	Route::get('add-ad', 'AdController@addAd');
	Route::post('add-ad-submit', 'AdController@addAdSubmit');
	Route::get('view-ads', 'AdController@viewAds');
	Route::get('toggle-ad-active-status/{status}/{id}', 'AdController@toggleAdActiveStatus');
	Route::get('delete-ad/{id}', 'AdController@deleteAds');
	Route::get('edit-home-ad/{id}', 'AdController@editAds');
	Route::post('update-ad', 'AdController@updateAds');

	Route::get('add-slider', 'SliderController@addSlider');
	Route::post('add-slider-submit', 'SliderController@addSliderSubmit');
	Route::get('view-sliders', 'SliderController@viewSliders');
	Route::get('toggle-slider-active-status/{status}/{id}', 'SliderController@toggleSliderActiveStatus');
	Route::get('delete-home-slider/{id}', 'SliderController@deleteSlider'); 
	Route::get('edit-home-slider/{id}', 'SliderController@editSlider');
	Route::post('update-slider', 'SliderController@updateSlider');

	Route::get('add-news', 'NewsBlogController@addNews');
	Route::post('add-news-submit', 'NewsBlogController@addNewsSubmit');
	Route::get('view-all-news', 'NewsBlogController@viewsAllNews');
	Route::get('view-our-news', 'NewsBlogController@viewsOurNews');
    
	Route::get('view-all-blogs', 'NewsBlogController@viewsAllBlogs');
	Route::get('view-our-blogs', 'NewsBlogController@viewsOurBlogs');
	Route::get('toggle-news-active-status/{status}/{id}', 'NewsBlogController@toggleNewsActiveStatus');
	Route::get('delete-new/{id}', 'NewsBlogController@deleteNews');
	Route::get('edit-news/{id}', 'NewsBlogController@editNews');
	Route::post('update-news', 'NewsBlogController@updateNews'); 
	
	Route::get('add-new-association', 'AssociationController@addAssociation');
	Route::post('add-association-submit', 'AssociationController@addAssociationSubmit');
	Route::get('view-associations', 'AssociationController@viewAssociations');
	Route::get('add-new-association-member', 'AssociationController@addAssociationMember');
	Route::post('add-association-member-submit', 'AssociationController@addAssociationMemberSubmit');
	Route::get('view-association-members', 'AssociationController@viewAssociationMembers');
	Route::get('delete-association-member/{id}', 'AssociationController@deleteAssociationMember');
	Route::get('delete-association/{id}', 'AssociationController@deleteAssociation');
	Route::get('edit-association-member/{id}', 'AssociationController@editAssociationMembers');
	Route::post('update-association-member-details', 'AssociationController@updateAssociationMembersDetails');

	// meta tag
	Route::get('view-meta-tag', 'MetaTagController@viewMetaTag');
	Route::get('edit-meta-tag/{id}', 'MetaTagController@editMetaTag');
	Route::post('update-meta-tag', 'MetaTagController@updatemetatag');

	Route::get('add-blog', 'NewsBlogController@addBlog');
	Route::post('add-blog-submit', 'NewsBlogController@addBlogSubmit');
	Route::get('view-blogs', 'NewsBlogController@viewsBlogs');
	Route::get('toggle-blog-active-status/{status}/{id}', 'NewsBlogController@toggleBlogActiveStatus');
	Route::get('edit-blog/{id}', 'NewsBlogController@editBlog');
	Route::post('update-blog', 'NewsBlogController@updateBlog');

	Route::get('add-jewellery-category', 'JewelleryCategoryController@addJewelleryCategory');
	Route::post('add-jewellery-category-submit', 'JewelleryCategoryController@addJewelleryCategorySubmit');
	Route::get('view-jewellery-category', 'JewelleryCategoryController@viewJewelleryCategory');
	Route::get('delete-jewelley-category/{id}', 'JewelleryCategoryController@deleteJewelleyCategory');
    
    Route::get('add-news-blog-category', 'NewsBlogCategoryController@addNewsBlogCategory');
	Route::post('add-news-blog-category-submit', 'NewsBlogCategoryController@addNewsBlogCategorySubmit');
	Route::get('view-news-blog-category', 'NewsBlogCategoryController@viewNewsBlogCategory');
	Route::get('delete-news-blog-category/{id}', 'NewsBlogCategoryController@deleteNewsBlogCategory');



	Route::get('add-catalogue-product', 'CatalogueController@addCatalogueProduct');
	Route::post('add-catalogue-product-submit', 'CatalogueController@addCatalogueProductSubmit');
	Route::get('view-catalogue-products', 'CatalogueController@viewCatalogueProducts');
	Route::get('view-vendor-catalogue-products', 'CatalogueController@viewVendorCatalogueProducts'); 
	Route::get('toggle-catalogue-active-status/{status}/{id}', 'CatalogueController@toggleCatalogueActiveStatus');
	Route::get('delete-image/{id}', 'CatalogueController@deleteCatalogueimage');
	Route::get('edit-catalogue/{id}', 'CatalogueController@editCatalogue');
	Route::post('update-catalogue', 'CatalogueController@updateCatalogue');

	Route::get('add-blacklist', 'BlacklistController@addBlacklist');
	Route::post('add-blacklist-submit', 'BlacklistController@addBlacklistSubmit');
	Route::get('view-blacklist', 'BlacklistController@viewBlacklist');
	Route::get('toggle-blacklist-active-status/{status}/{id}', 'BlacklistController@toggleBlacklistActiveStatus');
	Route::get('delete-blacklist/{id}', 'BlacklistController@deleteBlacklist');
	Route::get('edit-blacklist/{id}', 'BlacklistController@editBlacklist');
	Route::post('update-blacklist', 'BlacklistController@updateBlacklist');

	Route::get('add-directory', 'DirectoryController@addDirectory');
	Route::post('add-directory-submit', 'DirectoryController@addDirectorySubmit');
	Route::get('view-directory', 'DirectoryController@viewDirectory');
	Route::get('approve-now','DirectoryController@approval');
    Route::get('approval/{id}','DirectoryController@approveNow');  
	Route::get('delete-directory/{id}', 'DirectoryController@deleteDirectory');
	Route::get('edit-directory/{id}', 'DirectoryController@editDirectory');
	Route::get('edit-vendor-directory', 'DirectoryController@editVendorDirectory'); 
	Route::post('update-directory', 'DirectoryController@updateDirectory');

	Route::get('add-job', 'JobController@addJob');
	Route::post('add-job-submit', 'JobController@addJobSubmit');
	Route::get('view-jobs', 'JobController@viewJobs');
	Route::get('view-all-jobs', 'JobController@viewAllJobs');

	Route::get('delete-job/{id}', 'JobController@deleteJob');
	Route::get('edit-job/{id}', 'JobController@editjob');
	Route::post('update-job', 'JobController@updatejob');

	Route::get('add-shop-product', 'ShopController@addShopProduct');
	Route::post('add-shop-product-submit', 'ShopController@addShopProductSubmit');
	Route::get('view-shop-products', 'ShopController@viewShopProducts');
	Route::get('delete-shop/{id}', 'ShopController@deleteshop');
	Route::get('edit-shop/{id}', 'ShopController@editShopProduct');
	Route::post('update-shop-product', 'ShopController@updateShopProduct');

    //User Routes
    
	Route:: get('join-association', 'AssociationController@joinAssociation');
	Route:: post('join-association-submit', 'AssociationController@joinAssociationSubmit');

	Route::get('my-orders', 'OrderController@myOrders');
	Route::get('admin-view-orders', 'OrderController@adminShowOrders');
	Route::get('view-orders', 'OrderController@vendorShowOrders');


	Route::get('my-job-applications/{job_id}', 'JobController@myJobApplications');
	Route::get('all-job-applications', 'JobController@allJobApplications');


	Route::get('become-a-vendor', 'DirectoryController@becomeVendor');
	Route::post('become-vendor-submit', 'DirectoryController@becomeVendorSubmit');

	Route::get('apply-for-website', 'WebsiteController@apply');
	Route::get('update-website-details', 'WebsiteController@updateWebsiteDetails');
	Route::post('update-website-submit', 'WebsiteController@updateWebsiteSubmit');
	Route::post('add-website-service-submit', 'WebsiteController@addWebsiteServiceSubmit');
	Route::get('delete-service/{id}', 'WebsiteController@deleteService');
	Route::post('add-website-slider-submit', 'WebsiteController@addWebsiteSliderSubmit');
	Route::get('delete-slider/{id}', 'WebsiteController@deleteSlider');
	Route::post('add-website-catalogue-submit', 'WebsiteController@addWebsiteCatalogueSubmit');
	Route::get('delete-catalogue/{id}', 'WebsiteController@deleteCatalogue');
	Route::get('view-website-contact-enquiry', 'WebsiteController@viewWebsiteContactEnquiry');

    
    // site settings 
	Route::get('edit-footer', 'SiteSettingController@editFooterContent');
	Route::post('update-footer', 'SiteSettingController@updateFooterContent');
	Route::get('edit-social', 'SiteSettingController@editSocialContent');
	Route::post('update-social', 'SiteSettingController@updateSocialContent');
    
    Route::get('add-rate', 'HeaderRateController@addRate');
	Route::post('add-rate-submit', 'HeaderRateController@addRateSubmit');
	Route::get('delete-rate/{id}', 'HeaderRateController@deleteRate');
	Route::get('view-rate/', 'HeaderRateController@viewRate'); 
	Route::get('edit-rate/{id}', 'HeaderRateController@editHeaderContent');
	Route::post('update-header-rate', 'HeaderRateController@updateHeaderContent');

    Route::get('edit-profile', 'DashboardController@editProfileImage');
    Route::post('update-profile', 'DashboardController@updateProfileImage'); 

    // qutation list in catalogue 
	Route::get('view-qutation-list', 'CatalogueController@viewQutationList');
	
	
    // qutation list in directory
	Route::get('view-qutation-directory-list', 'DirectoryController@viewQutationDirectoryList');
	//import csv file
	//Route::get('export-directory', 'DirectoryController@directoryExport')->name('export');
    Route::post('import-directory', 'DirectoryController@directoryImport');
    Route::post('import-job', 'JobController@jobImport');
    Route::post('import-news', 'NewsBlogController@newsImport');
    Route::post('import-blog', 'NewsBlogController@blogImport');
    Route::post('import-shop', 'ShopController@shopImport');
	
});


Route::get('/chat', 'HomeController@index')->name('home');
