CREATE TABLE PERSON
(
	ssn int NOT NULL UNIQUE CHECK (ssn >= 0),
	name char(20) NOT NULL,
	phno int UNIQUE,
	age int  NOT NULL CHECK (age >= 18),
	sex char(1)  NOT NULL,
	paddress char(100)  NOT NULL,
	primary key (ssn)

);

CREATE TABLE DONOR_DONATE(

	ssn int NOT NULL,
	did int NOT NULL,
	bloodType char(5) NOT NULL,
	foreign key (ssn) references PERSON(ssn),
	primary key(did)

);

CREATE TABLE PATIENT_RECEIVE(

	ssn int NOT NULL UNIQUE,
	pid int NOT NULL UNIQUE,
	bloodType char(5) NOT NULL,
	foreign key (ssn) references PERSON(ssn),
	primary key (pid)

);

CREATE TABLE PATIENT_RECEIVE2(
	
	pid int NOT NULL,
	illness char(20) NOT NULL,
	foreign key (pid) references PATIENT_RECEIVE(pid)

);

CREATE TABLE HOSPITAL(

	hid int NOT NULL UNIQUE,
	haddress char(100) NOT NULL UNIQUE,
	hname char(50) NOT NULL,
	hpno int NOT NULL UNIQUE,
	primary key (hid)

);

CREATE TABLE HOSPITAL1(

	hid int NOT NULL,
	pid int,
	foreign key (hid) references HOSPITAL(hid),
	foreign key (pid) references PATIENT_RECEIVE(pid)

);

CREATE TABLE BLOODBANK(

	bbid int NOT NULL,
	did int,
	ddate char(20) NOT NULL,
	foreign key (did) references DONOR_DONATE(did),
	primary key (bbid)

);

CREATE TABLE BLOODBANK2(

	did int,
	hemoglobin float,
	hemaocrit float,
	foreign key (did) references BLOODBANK(did)

);

CREATE TABLE DEMANDS(

	bbid int NOT NULL,
	hid int NOT NULL,
	blood char(10) NOT NULL,
	foreign key (bbid) references BLOODBANK(bbid),
	foreign key (hid) references HOSPITAL(hid),
	primary key (bbid,hid)
	
);