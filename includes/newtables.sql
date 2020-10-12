create table webinars (
	shn_id SERIAL PRIMARY KEY,
	shn_title varchar(100),
	shn_subtitle varchar(100),
	shn_speakers varchar(215),
	shn_description varchar(420),
	shn_date date,
	shn_time time,
	shn_type varchar(50),
	shn_link varchar(200),
	shn_recommended varchar(100)
);
create table npocaadmins (
	username varchar(50),
	password varchar(50)
);