
 
create table ngo_data(NGO_ID SERIAL primary key , NGO_name varchar(50) , email varchar(50) , phone varchar(50) , NGO_type varchar (50) ,cert_no  varchar (50), username varchar (50),password varchar (50)  );


create table public_data(p_id SERIAL primary key, name varchar(50) , email_address varchar(50), phone varchar(50), userid varchar(50), password varchar(20)  );

create table admin(a_id int primary key, login varchar(20), password varchar(20));


create table ngo_dashboard(ngodash_ID int references ngo_data(ngo_id), you_helped varchar (50) , status varchar (50) , reviews varchar(250));
 

create table public_dashboard(pdash_id int references public_data(p_id) ,task_description varchar(50), connected_NGO varchar(50) , status varchar(50) , given_reviews varchar(250));  











