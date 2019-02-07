# camacmvc
A genealogy resource website being prepared for my local church here in Bodfari, North Wales, UK.

The terms of reference for the website is to publish our local parish ledgers for Baptisms, Christenings, Mariages and Funerals.
It will provide Login, Posts and about 25000 records that have been manually transcribe into an Excel Spreadsheets

It is currently very early stages of hand written code with minimal bootstrap/design work.
The framework comes from Brad Traversy's Udemy course - Object Oriented PHP & MVC and Bootstrap tutorials.
I am using Window 7 Pro, XAMPP, Atom, PHPMyAdmin and now GitHub.

I have tested the framework for login and posts sections and happy that I have followed the tutorial fully.
I have added a new section (Controller, Model and Veiws) for Records.
I have uploaded the Ecel CSV file for the 6000+ Baptism records and uploaded sucessfully.

Currently testing ../records/index to select and sort by surname only to a foreach table.
There is a need to veiw complete data of selected files individually have created .../records/show which works but!
Issues when going back to sorted records needing the page to be refreshed.
Trying to use Bootstrap Modal and insert dynamic data without success on .../records/sortbapt2
Gone back to .../records/sortbapt and then show for now.
