# Project

Milestone 1:






CEN 4010: Principles of Software Engineering
Spring 2018
Milestone 1: Team Project Proposal and Description

CEN 4010 Milestone Group 1
FAU Web Store (Perry’s Parts Pavillion)

Jasmin Hinton [Scrum Master, Team Leader,  jhinton2015@fau.edu]
Richard Altamore [Product Owner]
Ryan Connell [Development Team]
Jonathan Itty [Development Team]
David Berry [Development Team]

Monday, February 19, 2018

History Table:
1/23 – 1/29: Team Introductions & Work on Milestone 0
1/29 – 2/19: Picking a Project to do & Researching it; Milestone 1





Executive Summary
	“Perry Parts Pavilion” is a web store we are creating in order to make accessing, retaining and organizing equipment easier for students and staff. Many students with engineering majors will need to take classes that require them to pick up lab kits and other materials from the equipment storage room in the EE building (such as  “Logic Design” and “Intro to Microprocessors”). Our Web Store helps make the process of picking up those kits/parts easier for both staff and students. Through our Web Store, customers will be able to order parts/kits (through a simple sign up), rent some of the equipment, request permission to use some of the more advanced equipment if necessary (such as the laser cutter or 3D printer), and a number of other tasks will be possible. Even with all the capability of this store one of the overall goals for it is to make it as user friendly as possible, while still allowing for optimum efficiency. One of the main benefits of this Web Store is its simple accessibility.
A Web Store available for the students to use at their own discretion allows the department to accurately keep track of equipment and parts. This Web Store will be able to monitor everything that happens in the equipment storage room. The students merely have to sign up, place an order, and pick it up (for the ordering a part/kit feature). Thus, allowing the department and suppliers to kept stock of what is in stock and what may need replenishing. Along with this is gives students the ability to view all parts they may possibly need for a given project. Rather than combing through a room full of parts all parts necessary can be seen on one screen. The store also allow for accountability and guarantee of product once it has been requested. The departments ability to keep track of how many parts are taken by which students will allow for an understanding of if individuals are abusing the system. Also, with the ability to track inventory the sight can inform a student when a part is out of stock, rather than having the student search for the nonexistent part.
	Having a Web Store implemented helps not only the department but also the student and any suppliers that may be given access to the system. The difficulties of getting parts would essentially be removed completely from the students lives and the worrying about managing all that equipment in the supply room would all be taken care of by our Web Store, as it ensures that it is aware of everything that goes on in that room. Florida Atlantic University’s CEECS department would benefit greatly from the use of our Web Store and we, as students, would also be able to benefit from it ourselves. The FAU Web Store is the way of the future for that equipment supply room in the Engineering East building.

Competitive Analysis
	The two main forms of accessing that equipment supply room, and in turn, the equipment inside it, are presently:

Going to the supply room, looking for the parts/kit that you need for your class, and then answering questions regarding who you are and what you need it the requested parts for. This method is currently being implemented.
Using our web store to easily place any order, rent any equipment, request any machinery use, etc. This is the method that we are proposing and the method we want to be implemented into the system.

Using the Old Method to get your Kits/Parts
You must go to the supply room.
It takes a while to look for the parts you need.
You get your parts and need to sign for them.
Keeping track of all the parts that get rented out is difficult.
Human error could lead to losing parts.
Time slots for using advanced machinery is difficult to track.
Using the
New
FAU Web Store to get your Kits/Parts
Easy to order when your not at FAU.
You are given an exact location for the parts.
You get your parts and go without delay.
Keeps track of people who rent parts and sets a time limit.
The Web Store keeps track of all parts.
Appling to use the advanced machinery is simple and easy.

	Looking at what the system is using right now, we can see that there are certain aspects of it that can be improved drastically. The major examples are listed above. The most important would have to be the first, going to the supply room, this being because it does not accommodate for students who commute to FAU. These students have difficulty finding time in their schedules to make it in person to the supply room. The option of a web store allows for these students to have guaranteed parts before making the trip to school . With the Web Store in place, they could easily order their parts and quickly stop by FAU, and pick them up. With the Web Store, students would also have a much easier time finding the parts they’re looking for, as well as spend less time in the supply room in general. The student would place the order on the store, get the location, and from there it’s a simple get in and get out. Renting parts and keeping track of their whereabouts is also made a lot easier due to the fact that the Web Store takes care of it all. Along with this, the time slots for using the advanced machinery are unpredictable, but with the Web Store it’s all made clear. These are just some of the many benefits of using our Web Store.


Data Definition
STUDENT: Holds accounts through website. Is able to rent PRODUCTS. Has a COURSE LIST. 
COURSE LIST: A descriptor of STUDENT, telling what classes the student is in for COURSE REQUIREMENTS on EQUIPMENT and TIMESLOTS 
PRODUCT: Can either be EQUIPMENT, a JOB, a PURCHASE REQUEST, or a TIMESLOT. STUDENTS will request access to PRODUCTS through the web page.
EQUIPMENT: A part that can be rented from Perry's lab by a STUDENT and taken home to be used for classes. Has a LOCATION, COURSE REQUIREMENT, and a STATIC RATING. Will be shown on its own page with an image and description of the item. Equipment can be packaged into KITS.
JOB: A job to be done such as 3d Printing something. Must give a reason for needed job to be done.
PURCHASE REQUEST: A request for the lab to purchase a certain part for STUDENT use. Has a PRICE and AVAILABILITY.
TIMESLOT: A time for a STUDENT to use a piece of advanced machinery available. Has a time and COURSE REQUIREMENT.
KIT: STUDENTS can create a KIT from parts in the lab. Is a collection of EQUIPMENT and PURCHASE REQUESTS. STUDENT must meet all requirements of each piece of EQUIPMENT for renting, or must make a special request.
LOCATION: A descriptor of EQUIPMENT, telling where on Perry's shelf the piece is. If the part is being rented, it will be listed here and will be unrentable by other students until returned.
COURSE REQUIREMENT: A descriptor of EQUIPMENT and TIMESLOT, telling what class the STUDENT must have in their COURSE LIST in order to rent this part or use this machinery. Special request can be made if the course is not being taken by the STUDENT.
STATIC RATING: A boolean descriptor of EQUIPMENT, telling if it is static sensitive or not. Will need to be covered in pink foam if true.
PRICE: A descriptor of PURCHASE REQUESTS, telling the cost of the item that is being requested
AVAILABILITY: A boolean descriptor of PURCHASE REQUESTS, telling if the item is available for purchase from a vendor.

Overview, Scenarios, and Use Cases
	The FAU Web Store is being created for the sole purpose of making the process of getting equipment from the EE equipment supply room easier for both students and staff, alike. 
The project we are creating is a web store, which will allow users to create an account, order parts, request jobs (such as 3D printing, printed circuit boards, and laser cutting), and rent items.  This web store is a model of some similar sites like Amazon, Walmart, Home Depot, etc.  The user will be able to simply maneuver the site, by first creating an account with his/her Z number, email, phone number, and other pertinent information, to start their request. If a user decides to order parts then they will be able to select the individual parts, or kits if desired. Initially each part will display a description, image, part number and price. When the parts are low or not in stock it will be displayed for the user, and the vendor will be notified to restock the item. In addition, the admin users are key in updating the site with new inventory, new products, create kits, and able to have full access to all user accounts. The store is intended to be simplistic, and easily accessible for all user levels. This application is supposed to become a way to keep account of inventory, rentals, and kits for classes such as Logic Design and Microprocessor.

Initial List of High-Level Functional Requirements
User input of information: User is able to input their information, phone number, email, and Z number. This information is stored and used for later login. As well as keeping track of student use of product and parts.
User search: User is able to search for the desired product or rental availability.
User select/request of product: User is able to select parts on the display screen to learn more about them. Along with the ability to choose the option of add the item to their cart. 
User request for machinery usage: User is able to fill out request for time form necessary to reserve machine time. Each time user completes form the information is transferred to spreadsheet that holds all information and requests.
Add/delete cart item: User is able to add items to cart, including the number of items needed. The user can also delete these items. 
Inventory tracker: When user completes process of reserving said item the number of items is deducted from inventory. If product in cart becomes unavailable during processing time error message will show indicating the product is no longer in stock.
Rental Date: Rental date is shown and return date is displayed along with a notification of a the number  of days (3 or less) in for rental. These products are also deducted from the inventory count to indicated their availability.

List of Non-Functional Requirements
Security: Users will login using there FAU username and FAU password. The user’s credentials must be current. If the user changes their username/password, the web store must be able to allow the user to login using their new credentials, while also preventing them from logging in using their old credentials. Ideally, this behaviour should be near instantaneous. Also, only those with valid FAU accounts should be given even basic access to the web store.
Expected Load: Given that the only users of this system will be Engineering/Computer Science students, plus faculty, the system is not expected to need the ability to maintain and large number of concurrent users. Thus, the expected number of concurrent users is the size of a large classroom: one hundred and twenty users.
Accessibility: The interface must be user friendly and relatively simple for customers. Usage of the system should require only a basic understanding of websites and computers. Directions must be clear and concise, without using any engineering lingo. Inclusion of small tutorial windows explaining how to operate certain parts of the system (where to find one’s FAU username, for example) are a possibility.
Availability: The application must be available to customer level users any time there are classes taking place. For administrator level users, the system should be available any time so long as the server is running. Administrators will be able to open and close the web store.
Response Time: Ideally, response time from the system should be under ten seconds. At most, the system can take a minute to respond, assuming there is a stable connection between the user’s terminal and the server.
Reusability: Given that the system will allow administrator level users the ability to add and remove items from the storefront, the system should be able to remain in use for as long as the server’s hardware does not change.

High-Level System Architecture
Languages: Being a web application on a LAMP server, the webpages of the web store will be written in HTML and Javascript, while the application’s main functionality processes will be written in PHP. Also, since it is expected that the application will require connections to databases located on the same LAMP server, MySQL will also be used. 
Supported Browsers: The application will be able to be run on the three major internet browsers: Internet Explorer, Firefox, and Chrome.
Applications Used in Development: For writing HTML and PHP code, the team may use the web development tool Brackets. The team will use the XAMPP program to set up local servers on their computers and use those servers to test the application throughout development. As stated before, since the application will require communication with MySQL databases, the team will set up both Apache and MySQL servers.
For uploading the application to the FAU LAMP servers, the team will use either PuTTY or WinSCP, depending on the team member’s personal preference.
Team

	Product Owner --- Richard Altamore
Handles the paperwork portion of the project and any and all new features that might be added to the Web Store.
	Scrum Master --- Jasmin Hinton
Handles time management and oversees the progress of the development team so that they do not deviate from the Scrum method and its values.
	Development Team --- Ryan Connell
Assistant to the lead programmer of the team, David. He will be tasked with helping out on the coding aspect of the Webstore. 
	Development Team --- Jonathan Itty
Assistant to the lead programmer of the team, David. He will be tasked with helping out on the coding aspect of the Webstore. 
	Development Team --- David Berry
The lead programer of the team, has the most advanced knowledge of how to setup the basis for the Web Store we are creating. He is charged with the handling of the major portions of the coding.




Checklist
Team decided on basic means of communication: DONE
Team found a time slot to meet outside of class: ON TRACK
Front and back end team leads chosen: DONE
GitHub master chosen: DONE
Team ready and able to use the chosen back and front-end frameworks: ON TRACK
Skills of each team member defined and known to all: DONE
Team lead ensured that all team members read the final M1 and agree/understand if before submission: ON TRACK
