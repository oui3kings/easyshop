CREATE TABLE easyshop_preferences (
 	store_id int(11) NOT NULL auto_increment,
	store_name varchar(200) NOT NULL default '',
	support_email varchar(200) NOT NULL default '',
	store_address_1 varchar(200) NOT NULL default '',
	store_address_2 varchar(200) NOT NULL default '',
	store_city varchar(200) NOT NULL default '',
	store_state varchar(200) NOT NULL default '',
	store_zip varchar(200) NOT NULL default '',
	store_country varchar(200) NOT NULL default '',
	store_welcome_message text NOT NULL,
	store_info text NOT NULL,
	store_image_path varchar(200) NOT NULL default '',
	num_category_columns int(11) NOT NULL default '3',
	categories_per_page int(11) NOT NULL default '25',
	num_item_columns int(11) NOT NULL default '3',
	items_per_page int(11) NOT NULL default '25',
	paypal_email varchar(200) NOT NULL default '',
	popup_window_height varchar(200) NOT NULL default '',
	popup_window_width varchar(200) NOT NULL default '',
	cart_background_color varchar(200) NOT NULL default '',
	thank_you_page_title varchar(200) NOT NULL default '',
	thank_you_page_text text NOT NULL,
	thank_you_page_email text NOT NULL,
	payment_page_style varchar(200) NOT NULL default '',
	payment_page_image varchar(200) NOT NULL default '',
	add_to_cart_button varchar(200) NOT NULL default '',
	view_cart_button varchar(200) NOT NULL default '',
	sandbox int(11) NOT NULL default '1',
	set_currency_behind varchar(1) NOT NULL default '',
	minimum_amount int(11) NOT NULL default '0',
	always_show_checkout varchar(1) NOT NULL default '',
	email_order varchar(1) NOT NULL default '',
    product_sorting varchar(200) NOT NULL default '',
    page_devide_char varchar(10) NOT NULL default '',
    icon_width int(11) NOT NULL default '0',
	cancel_page_title varchar(200) NOT NULL default '',
	cancel_page_text text NOT NULL,
	enable_comments varchar(1) NOT NULL default '',
	show_shopping_bag varchar(1) NOT NULL default '',
	print_shop_address varchar(1) NOT NULL default '',
	print_shop_top_bottom varchar(1) NOT NULL default '',
	print_discount_icons varchar(1) NOT NULL default '',
    shopping_bag_color varchar(1) NOT NULL default '',
    enable_ipn int(11) NOT NULL default '1',
    enable_number_input varchar(1) NOT NULL default '',
    print_special_instr varchar(1) NOT NULL default '',
    email_info_level varchar(1) NOT NULL default '',
	email_additional_text text NOT NULL,
	monitor_clean_shop_days int(3) NOT NULL default '3',
	monitor_clean_check_days int(3) NOT NULL default '7',
	num_main_category_columns int(11) NOT NULL default '3',
	main_categories_per_page int(11) NOT NULL default '25',
	paypal_primary_email varchar(200) NOT NULL default '',
	PRIMARY KEY (store_id)
) TYPE=MyISAM;
CREATE TABLE easyshop_main_categories (
    main_category_id int(11) NOT NULL auto_increment,
	main_category_name varchar(200) NOT NULL default 'None',
	main_category_description text NOT NULL,
	main_category_image varchar(200) NOT NULL default 'None',
	main_category_active_status int(11) NOT NULL default '1',
	main_category_order int(11) NOT NULL default '1',
	PRIMARY KEY (main_category_id)
) TYPE=MyISAM;
CREATE TABLE easyshop_item_categories (
    category_id int(11) NOT NULL auto_increment,
	category_name varchar(200) NOT NULL default 'None',
	category_description text NOT NULL,
	category_image varchar(200) NOT NULL default 'None',
	category_active_status int(11) NOT NULL default '1',
	category_order int(11) NOT NULL default '1',
    category_main_id int(11) NOT NULL default '0',
    category_class int(11) NOT NULL,
    category_order_class int(11) NOT NULL,
	PRIMARY KEY (category_id)
) TYPE=MyISAM;
CREATE TABLE easyshop_currency (
	currency_id int(11) NOT NULL auto_increment,
	display_name varchar(200) NOT NULL default 'None',
	paypal_currency_code text NOT NULL,
	unicode_character varchar(200) NOT NULL default 'None',
	currency_active int(11) NOT NULL default '1',
	currency_display int(11) NOT NULL default '1',
	currency_order int(11) NOT NULL default '1',
	PRIMARY KEY (currency_id)
) TYPE=MyISAM;
CREATE TABLE easyshop_properties (
    property_id int(11) NOT NULL auto_increment,
    prop_display_name varchar(200) NOT NULL default '',
    prop_list text NOT NULL,
    prop_prices text NOT NULL,
    PRIMARY KEY (property_id)
) TYPE=MyISAM;
CREATE TABLE easyshop_discount (
    discount_id int(11) NOT NULL auto_increment,
    discount_name varchar(200) NOT NULL default '',
    discount_class int(11) NOT NULL,
    discount_flag int(11) NOT NULL,
    discount_price FLOAT NOT NULL,
    discount_percentage FLOAT NOT NULL,
    discount_valid_from int(11) NOT NULL,
	discount_valid_till int(11) NOT NULL,
	discount_code varchar(200) NOT NULL default '',
  PRIMARY KEY (discount_id)
) TYPE=MyISAM;
CREATE TABLE easyshop_items (
	item_id int(11) NOT NULL auto_increment,
	category_id int(11) NOT NULL,
	item_name varchar(200) NOT NULL default '',
	item_description text NOT NULL,
	item_price FLOAT NOT NULL,
	sku_number varchar(200) NOT NULL default '',
	shipping_first_item FLOAT NOT NULL,
	shipping_additional_item FLOAT NOT NULL,
	handling_override FLOAT NOT NULL,
	item_image varchar(200) NOT NULL default 'None',
	item_active_status int(11) NOT NULL default '1',
	item_out_of_stock int(11) NOT NULL default '1',
	item_out_of_stock_explanation text NOT NULL,
	item_order int(11) NOT NULL default '1',
	prod_prop_1_id int(11) NOT NULL,
	prod_prop_1_list text NOT NULL,
	prod_prop_2_id int(11) NOT NULL,
	prod_prop_2_list text NOT NULL,
	prod_prop_3_id int(11) NOT NULL,
	prod_prop_3_list text NOT NULL,
	prod_prop_4_id int(11) NOT NULL,
	prod_prop_4_list text NOT NULL,
	prod_prop_5_id int(11) NOT NULL,
	prod_prop_5_list text NOT NULL,
	prod_discount_id int(11) NOT NULL,
    item_instock int(11) NOT NULL default '0',
    item_track_stock int(11) NOT NULL default '0',
    download_product int(11) NOT NULL default '0',
    download_filename varchar(200) NOT NULL default '',
    prod_promo_class int(11) NOT NULL,
	item_minimum int(11) NOT NULL default '0',
    download_datasheet int(11) NOT NULL default '0',
	download_datasheet_filename varchar(200) NOT NULL default '',
    item_quotation int(11) NOT NULL default '0',
	PRIMARY KEY (item_id)
) TYPE=MyISAM;
CREATE TABLE easyshop_ipn_orders (
    ppfield_id              int(127) NOT NULL auto_increment,
    payment_type            varchar(20) default NULL,
    payment_date            varchar(30) default NULL,
    payment_status          varchar(50) default NULL,
    pending_reason          varchar(20) default NULL,
    address_status          varchar(20) default NULL,
    payer_status            varchar(20) default NULL,
    first_name              varchar(64) default NULL,
    last_name               varchar(64) default NULL,
    payer_email             varchar(127) default NULL,
    payer_id                varchar(13) default NULL,
    address_name            varchar(128) default NULL,
    address_country         varchar(64) default NULL,
    address_country_code    varchar(3) default NULL,
    address_zip             varchar(20) default NULL,
    address_state           varchar(40) default NULL,
    address_city            varchar(40) default NULL,
    address_street          varchar(200) default NULL,
    business                varchar(127) default NULL,
    receiver_email          varchar(127) default NULL,
    receiver_id             varchar(13) default NULL,
    residence_country       varchar(2) default NULL,
    shipping                varchar(10) default NULL,
    tax                     varchar(10) default NULL,
    mc_currency             varchar(10) default NULL,
    mc_fee                  varchar(10) default NULL,
    mc_gross                varchar(10) default NULL,
    txn_type                varchar(10) default NULL,
    txn_id                  varchar(18) default NULL,
    parent_txn_id           varchar(18) default NULL,
    notify_version          varchar(10) default NULL,
    auction_buyer_id        varchar(64) default NULL,
    auction_closing_date    varchar(30) default NULL,
    for_auction             varchar(2) default NULL,
    reason_code             varchar(4) default NULL,
    custom                  varchar(255) default NULL,
    invoice                 varchar(127) default NULL,
    verify_sign             varchar(255) default NULL,
    num_cart_items          varchar(10) default NULL,
    charset                 varchar(10) default NULL,
    mc_shipping             varchar(10) default NULL,
    mc_handling             varchar(10) default NULL,
    test_ipn                varchar(2) default NULL,
    payment_gross           varchar(10) default NULL,
    phpsessionid            varchar(127) default NULL,
    phptimestamp            varchar(40) default NULL,
    all_items               TEXT,
	ipn_user_id int(11) NOT NULL,
    PRIMARY KEY (ppfield_id),
    UNIQUE KEY invoice (invoice)
) TYPE=MyISAM;