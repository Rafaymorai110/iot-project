<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=> 'locale'], function(){
	
	

	



	// Blogs Routes

	Route::get('/blog','Front\ViewController@blog');
	Route::get('/blog/post/{slug}','Front\ViewController@post');
	Route::post('/blog/post/create/{slug}','Front\ActionController@commentStore')->name('post.comment');


	



	// USER AUTH ROUTES
	Auth::routes(['verify' => true]);

	

	
	// ADMIN AUTH ROUTES
	Route::get('admin/login','Admin\LoginController@index')->name('admin.login');
	Route::post('admin/do_login','Admin\LoginController@login')->name('admin.do_login');

	Route::get('admin/reset/password','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.reset.password');
	Route::post('admin/password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

	Route::get('admin/password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::POST('admin/reset/password', 'Admin\ResetPasswordController@reset');

    // ADMIN ROUTES

	Route::group(['prefix'=>'admin', 'middleware'=>'auth:admin'],function(){

		 Route::get('/dashboard','Admin\AdminController@index')->name('admin.dashboard');
		 Route::post('/logout','Admin\LoginController@logout')->name('admin.logout');

		 Route::get('/admin/profile','Admin\AdminController@profile')->name('admin.profile');
		 Route::post('/admin/profile/update','Admin\AdminController@update')->name('admin.profile.update');
		 Route::get('/admin/settings','Admin\AdminController@settings')->name('admin.settings');
		 Route::post('/admin/settings/change/password','Admin\AdminController@changePassword')->name('admin.settings.change.password');

		// Admin Staff Routes
		Route::resource('staffs','Admin\StaffController');
		Route::get('/staff/datatable', 'Admin\StaffController@datatables')->name('admin.staff.datatable');

		// Admin Roles Route
		Route::resource('roles','Admin\RoleController');
		Route::get('/role/datatable', 'Admin\RoleController@datatables')->name('admin.role.datatable');

	     // Admin Customers Routes
	     Route::get('/customers','Admin\CustomerController@index')->name('admin.customers');
	     Route::get('/customers/{id}/details','Admin\CustomerController@show')->name('admin.customers.show');
	     Route::get('/customers/{id}/edit','Admin\CustomerController@edit')->name('admin.customers.edit');
	     Route::post('/customers/{id}/update','Admin\CustomerController@update')->name('admin.customers.update');
	     Route::delete('/customers/{id}/destroy','Admin\CustomerController@destroy')->name('admin.customers.destroy');
	     Route::get('/customers/{id}/deactive/', 'Admin\CustomerController@block')->name('admin.customers.block');
	     Route::get('/customers/{id}/active/', 'Admin\CustomerController@unblock')->name('admin.customers.unblock');
	     Route::get('/customers/datatable', 'Admin\CustomerController@datatables')->name('admin.customers.datatable');

	    
	     // Admin Products Routes
	     Route::resource('products', 'Admin\ProductController');
	     Route::post('/product/{id}/update', 'Admin\ProductController@update')->name('admin.product.update');
	     Route::get('/product/{product_id}/{image_id}/delete', 'Admin\ProductController@deleteProductImage')->name('admin.product.image.delete');
	     Route::get('/product/deactiveproducts', 'Admin\ProductController@deactiveproducts')->name('admin.deactiveproducts');
	     Route::get('/product/datatable', 'Admin\ProductController@datatables')->name('admin.products.datatable');
	     Route::get('/product/deactivedatatables', 'Admin\ProductController@deactivedatatables')->name('admin.products.deactivedatatables');
	     Route::get('/product/active/{id}', 'Admin\ProductController@active')->name('admin.product.active');
	     Route::get('/product/deactive/{id}', 'Admin\ProductController@deactive')->name('admin.product.deactive');
	     Route::get('/products/gethighlight/{id}', 'Admin\ProductController@gethighlightProduct')->name('admin.products.gethighlight');
	     Route::post('/products/highlight/{id}', 'Admin\ProductController@highlightProduct')->name('admin.products.highlight');



	  

	   

	     // Admin Vendor Payment Settings Routes
	     Route::get('/payment_settings','Admin\PaymentSettingController@index')->name('admin.payment.settings');
	     Route::post('/payment_settings/update','Admin\PaymentSettingController@update')->name('admin.payment.settings.update');

	     // Admin Vendor Payment Withdraw Routes
	     Route::get('/payment_withdraws','Admin\PaymentWithdrawController@index')->name('admin.vendor.payment.withdraws');
	     Route::get('/payment_withdraws/{id}/details','Admin\PaymentWithdrawController@show')->name('admin.vendor.payment.withdraw.detail.show');
	     Route::get('/payment_withdraws/{id}/{status}/change_status','Admin\PaymentWithdrawController@status')->name('admin.vendor.payment.withdraw.status');
	     Route::get('/payment_withdraws_datatables','Admin\PaymentWithdrawController@datatables')->name('admin.vendor.payment.datatable');

	   

	   
		    // Blog Routes
		Route::get('/create_post/','Admin\BlogController@create')->name('admin.create.post');
		Route::get('/create_category/','Admin\BlogController@createCategory')->name('admin.create.category');

		Route::get('/blog_posts/','Admin\BlogController@fetchPost')->name('admin.posts');
		Route::get('/blog_categories/','Admin\BlogController@fetchCategory')->name('admin.categories');
		Route::DELETE('/blog_categories/destroy/{id}','Admin\BlogController@destroyCat')->name('admin.categories.destroy');
		Route::get('/blog_comments/','Admin\BlogController@fetchComment')->name('admin.comments');

		Route::get('/blog_categories/datatable', 'Admin\BlogController@datatableCat')->name('admin.blog.cat.datatable');
		Route::get('/blog_posts/datatable', 'Admin\BlogController@datatablePost')->name('admin.blog.post.datatable');
		Route::get('/blog_comments/datatable', 'Admin\BlogController@datatableComment')->name('admin.blog.comment.datatable');
		Route::post('/store_post/','Admin\BlogController@store')->name('admin.post.store');
		Route::post('/addCategory/','Admin\BlogController@addCategory')->name('admin.category.add');
		Route::delete('/delCategory/','Admin\BlogController@delCategory')->name('admin.category.del');

		

		// Coupons Routes
		Route::get('/coupons/fetch','Admin\CouponController@index')->name('coupon.index');
		Route::get('/coupons/create','Admin\CouponController@create')->name('coupon.create');
		Route::post('/coupons/store','Admin\CouponController@store')->name('coupon.store');
		Route::get('/coupons/edit/{id}','Admin\CouponController@edit')->name('coupon.edit');
		Route::post('/coupons/update/{id}','Admin\CouponController@update')->name('coupon.update');
		Route::get('/coupons/active/{id}','Admin\CouponController@active')->name('admin.coupon.active');
		Route::get('/coupons/deactive/{id}','Admin\CouponController@deactive')->name('admin.coupon.deactive');
		Route::DELETE('/coupons/dlt/{id}','Admin\CouponController@destroy')->name('coupon.destroy');

		Route::get('/couponTable', 'Admin\CouponController@couponDatatable')->name('admin.coupon.datatable');

	

	    Route::get('/get_new_sku/','Admin\ProductController@generateSku')->name('admin.generate.Sku');


		Route::get('/clear-cache', function() {
		    Artisan::call('cache:clear');
		    Artisan::call('route:clear');
		    Artisan::call('view:clear');
		    // Artisan::call('key:generate');
		    Artisan::call('optimize');
		    Artisan::call('clear-compiled');
		    Artisan::call('config:clear');
		    Artisan::call('optimize:clear');
		    return redirect()->back()->with('success','Cache Files Cleared');
		});
		Route::get('/sync-keys', function() {

		    $this->translation->saveMissingTranslations();

		    return redirect()->back()->with('success','Missing Keys Synchronised Successfully!');
		})->name('admin.sync_translated_keys');
	});

});

// Locale Route End

Route::get('/clear-cache', function() {
    Artisan::call('optimize:clear');
    return redirect()->back()->with('success','Cache Files Cleared');
});