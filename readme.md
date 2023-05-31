# Online-Grocery-Shop
## SRS Document
### 1.	Introduction	
#### 1.1	Purpose	
This document is meant to delineate the features of Online Grocery Shop, so as to serve as guide to the developers on one hand and a software validation document for the prospective client on the other.
The Online Grocery Shop is an e-commerce site for grocery products. It’s a solution for customers who want to buy necessary grocery items without going outside. The customers will have the chance to surf products by categories on the website and can purchase it hassle-free. The administrator will maintain the website and will verify the transaction, set up the shop. It will also have some employees for stock up the products, and account managers to handle the payments.
#### 1.2 Document Conventions
SRS –Software Requirement Specification
UML - Unified Modeling Language
#### 1.3 Stakeholder – The person who will participate in the system. Ex: Customer, Administrator.
Intended Audience and Reading Suggestions
The Audience might be the customer who wants to buy product without visiting the shop physically. It is a full fledge grocery shop in online. Any products related to grocery items will be on this website.

#### 1.4 Product Scope
This software helps to buy grocery from online and provides a fast delivery services to its customers. This software is easy to use and customers can access it via computer or mobile with any web browser.
### 2. Overall Description
#### 2.1 Product Perspective
The online grocery shop is a supermarket that allows users to purchase a wide range of food products, which may be fresh or packaged. This product is for a person who wants to buy goods through the internet from any place. It will also help to close the gap between the seller, the retailer, and the customer. The online grocery shop should be user friendly, reliable, and stand-alone software. Since it is a web-based software, it can be run through any browser.
#### 2.2 Product Functions
Major functions of the product are shown below:
* Admin
  * The admin is the super user and holds control over all the activities that can be performed. Admin can manage the customer list and the product list.
* Customer/Guest
  * A customer will be able to browse through the products to place orders.  If a guest user accesses the website, he will be prompt to log in to place an order.
* Employees
  * Employees such as the purchase manager, sales manager, and account manager will also have access to the website.
#### 2.3 User Classes and Characteristics
There are 3 kinds of user in the software:
* **Administration:** The admin holds all kinds of privileges. It can override any user in the database.
* **Customers:** Customers will be the end users who buy goods from the website. They should be familiar with internet and terminology like add to cart, check out, payment method etc.
* **Employees:** Employers have different functions such as purchase manager helps to update storage according to the sales list. Account manager looks after the accounting activities of the system. Sales manager analyze sales revenue from the database and update recommended products.
#### 2.4 Operating Environment
This is a web-based application. Any internet browser such as Google Chrome or Mozilla Firefox can run this software. There are no specific requirements that needed to be fulfilled.
#### 2.5 Design and Implementation Constraints
There are few constraints due to implementation and design:
- There is no real-life credit card validation, cash-only system is implemented.
- It is a web-based development, to access the website, user should use a pc or mobile.
#### 2.6 User Documentation
User documentation will be released after the development of the software and before releasing the software to customer-base.
#### 2.7 Assumptions and Dependencies
There are some assumption needed to be made before developing the software. Such as:
- The payment method should be cash-on delivery.
- Users must have internet connection to use the service of this software.
If the requirement changes the version will be released later.
### 3. UML Model Diagrams
#### 3.1 Use case diagram

![usecase](https://github.com/abeda2152/Online-Grocery-Shop/assets/20505454/53a67450-a973-4cf7-8f3a-3ce6827b52ed)
<sub>Figure: Use Case Diagram for Online Grocery Store<sub>

#### 3.2 Class Diagram
  ![classdia](https://github.com/abeda2152/Online-Grocery-Shop/assets/20505454/58af6623-7ab4-4a21-b297-aa0ea6587eb3)
<sub>Figure: Class Diagram for Online Grocery Store<sub>
#### 3.3 Sequence Diagram
  ##### 3.3.1 Sequence diagram for admin
  ![admin](https://github.com/abeda2152/Online-Grocery-Shop/assets/20505454/bb1f60ba-9db8-42a7-823e-0cce5c6ca10a)
  <sub>Figure: Sequence Diagram for Admin<sub>
##### 3.3.2 Sequence diagram for employee
 ![employee](https://github.com/abeda2152/Online-Grocery-Shop/assets/20505454/7a705040-3b2f-4090-a28f-a935f7ebe4f0)
    <sub>Figure: Sequence Diagram for employees<sub>
##### 3.3.3 Sequence diagram for customer
  ![customer](https://github.com/abeda2152/Online-Grocery-Shop/assets/20505454/e3689930-16d8-4ff4-9f45-cc0de177bdba)
      <sub>Figure: Sequence Diagram for customer<sub>
#### 3.4 Activity Diagram
##### 3.4.1 Activity diagram for admin
  ![admin_activity](https://github.com/abeda2152/Online-Grocery-Shop/assets/20505454/b8c48a8d-a961-4fa1-9879-3dd062e0e580)
##### 3.4.2 Activity diagram for customers
   ![cust_activity](https://github.com/abeda2152/Online-Grocery-Shop/assets/20505454/ced13355-7940-4481-8db8-10af32ea4071)
 ##### 3.4.3 Activity diagram for employees
   ![employee_activity](https://github.com/abeda2152/Online-Grocery-Shop/assets/20505454/f06b031e-46c1-4e62-95aa-e9870907259a)
### 4. External Interface Requirements
#### 4.1 User Interfaces
![fpg](https://github.com/abeda2152/Online-Grocery-Shop/assets/20505454/94930a5d-cae8-412c-b439-70b9c8668465)
<sub>Figure: User Interface of the web application<sub>
#### 4.2 Hardware Interfaces
Hardware Interface is an architecture which is used to interconnect two devices together. Including the design of the Plug socket, the type, number and purpose of the wires and the electrical signal which helps to pass across them. Due to its intrinsic complexity and error-prone nature, it is unreliable and insecure.
#### 4.3 Software Interfaces
Software interface is a point of interaction of different components. This interaction involving how the user can interact with the application through joining both the hardware and software itself. Languages, Codes and messages using to communicate with each other and to the hardware using Windows, Mac, and Linux operating system, SMTP email, IP network protocols and software drivers are the example of software interface which is activate the peripheral devices.
#### 4.4 Communications Interfaces
The online grocery shop will use HTTP protocol for communication over the internet and for data transfers it will use TCP/IP.
### 5. System Features
This section provides a total overview of the system features. Some basic functional requirements are provided below:
#### 5.1 Functional Requirements
##### 5.1.1 Administrator
 - Admin panel controls the database system and can keep track of all records of customers. He can override any function.
 - He also can view all the details of current and previous employees.
 - Can delete customer account due to customer’s request.
 - Admin user feature of the software is a high priority task.
##### 5.1.2 Customers
 - New users will have to create an account.
 - Old customers will use a valid login id to enter into the site.
 - Can edit/view his personal details. View his previous payment history.
 - Can view all products which are available and add them to cart to buy.
 - Can delete item from the cart before checkout if necessary.
 - Can share product review under each product.
 - There will also be a wish list to bookmark a product that customer wants to buy in future.
##### 5.1.3 Employees
 - Employees will have to login using their employee id.
 - Sales manager will manages sales to customers. They are responsible for delivery of customer product.
 - Sales manager also inform admin when there’s any product shortage.
 - Purchase manager manages stock of each product items. He purchase products from vendor according to admins request.
 - Accounting manager keeps track of all payment transactions made by customers and update payment info.
 - Accounting manager also consult with admin before updating the payment database.
### 6. Other Nonfunctional Requirements
#### 6.1 Performance Requirements
The performance of the product mainly depends on the speed of the of Internet connection.
#### 6.2 Security Requirements
 - The system use SSL (secured socket layer) in all transactions that include any confidential customer information.
 - The system must automatically log out all customers after a period of inactivity.
 - The system should not leave any cookies on the customer’s computer containing the user’s password.
 - The system’s back-end servers shall only be accessible to authenticated administrators. Sensitive data will be encrypted before being sent over insecure connections like the internet.

### Appendix A: Glossary
Google form responses taken from potential users:
![f01](https://github.com/abeda2152/Online-Grocery-Shop/assets/20505454/f253037b-65d7-429e-9245-f3fa23b618c7)
![f02](https://github.com/abeda2152/Online-Grocery-Shop/assets/20505454/d57b2245-9c1c-4ec4-804c-942d2b23d615)
<sub>Figure: Web form responses from potential customers<sub>
