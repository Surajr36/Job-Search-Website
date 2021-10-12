SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_master`
--

CREATE TABLE `application_master` (
  `ApplicationId` int NOT NULL,
  `JobSeekId` int NOT NULL,
  `JobId` int NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_master`
--

INSERT INTO `application_master` (`ApplicationId`, `JobSeekId`, `JobId`, `Status`, `Description`) VALUES
(1, 3, 1, 'Call Latter Send', 'Invited on 21-Dec-2013.'),
(2, 3, 2, 'Call Latter Send', 'You are Invited For Interview on 10-MAR-2013.'),
(3, 3, 3, 'Call Latter Send', 'Invited on 21-Dec-2013.'),
(5, 3, 4, 'Call Latter Send', 'Invited on 21-Dec-2013.'),
(6, 4, 2, 'Call Latter Send', 'Impressive Profile, come for the interview.'),
(7, 3, 7, 'Call Latter Send', 'Need more details on past experience.');

-- --------------------------------------------------------

--
-- Table structure for table `employer_reg`
--

CREATE TABLE `employer_reg` (
  `EmployerId` int NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint NOT NULL,
  `Area_Work` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_reg`
--

INSERT INTO `employer_reg` (`EmployerId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(2, 'TCS Pvt Limited', 'Mr. Mohan Shah', 'Viman Nagar', 'Pune', 'mohan@gmail.com', 9898989898, 'Software', 'Confirm', 'mohan', 'mohan', 'Who is Your Favourite Person?', 'sachin'),
(3, 'Google', 'Mr. Sunil Pandya', 'Ice Town', 'Bengaluru', 'sunil@google.com', 8989898989, 'Hardware', 'Confirm', 'sunil', 'sunil', 'Who is Your Favourite Person?', 'raghav'),
(4, 'Microsoft', 'Mr. Nirav Soni', 'Thane', 'Mumbai', 'nirav@outlook.com', 9898989898, 'Software', 'Confirm', 'nirav', 'nirav', 'What is Your Pet Name?', 'katara'),
(5, 'JP Morgan Chase', 'Mr. Narayan', 'Sahibagh', 'Ahmedabad', 'narayan@yahoo.com', 6767676767, 'Software', 'Confirm', 'narayan', 'narayan', 'What is Your Pet Name?', 'nari'),
(6, 'Bajaj Finserv', 'Mr. Anil Kumbli', 'Karjat', 'Mumbai', 'anil@bajaj.com', 9767867127, 'Finance', 'Confirm', 'anil', 'anil', 'Who is Your Favourite Person?', 'Ambani');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackId` int NOT NULL,
  `JobSeekId` int NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `JobSeekId`, `Feedback`, `FeedbakDate`) VALUES
(5, 3, 'Slow Website', '2021-09-13'),
(7, 4, 'Thanks For Your Support.', '2021-09-18'),
(10, 4, 'Google takes a long time to respond to applications.', '2021-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_education`
--

CREATE TABLE `jobseeker_education` (
  `EduId` int NOT NULL,
  `JobSeekId` int NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `University` varchar(100) NOT NULL,
  `PassingYear` mediumint NOT NULL,
  `Percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker_education`
--

INSERT INTO `jobseeker_education` (`EduId`, `JobSeekId`, `Degree`, `University`, `PassingYear`, `Percentage`) VALUES
(3, 3, 'B. Tech', 'VIT Universiy', 2011, 68.89),
(4, 3, 'M.C.A', 'Anna University', 2013, 89.9),
(5, 3, 'S.S.C', 'GSEB', 2005, 80),
(6, 4, 'M.B.A', 'VIT University', 2020, 94);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_reg`
--

CREATE TABLE `jobseeker_reg` (
  `JobSeekId` int NOT NULL,
  `JobSeekerName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `Resume` varchar(200) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(3, 'Rashi Malik', 'Near Dena Bank', 'Mehsana', 'rashi@gmail.com', 9898989898, 'M.C.A', 'Female', '2013-09-10', 'real_resume.pdf', 'Confirm', 'rashi', 'rashi', 'What is Your Pet Name?', 'jalpa'),
(4, 'Nishal Kulkarni', 'Kalyaninagar', 'Pune', 'nishal@gmail.com', 8989898989, 'M.B.A', 'Male', '2013-09-16', 'sample_resume.pdf', 'Confirm', 'nishal', 'nishal', '', ''),
(5, 'Sailesh N S', 'Patan', 'Hyderabad', 'sailesh@gmail.com', 9898989898, 'MA', 'Male', '2013-10-15', 'admin.jpg', 'Confirm', 'sailesh', 'sailesh', '', ''),
(6, ' \r\nKushal Jain\r\n\r\n', 'Swastik Society', 'Baroda', 'kushal@gmail.com', 8989898998, 'BE', 'Male', '2013-10-09', '470X310_1.jpg', 'Confirm', 'kushal', 'kushal', 'What is Your Pet Name?', 'mehu'),
(7, 'Simran Singh', 'Mars Town', 'Berlin', 'simran@gmail.com', 9996663331, 'B. Tech', 'Female', '2009-04-06', 'nishal_resume.pdf', 'Confirm', 'simran', 'simran', 'What is Your Pet Name?', 'Bunny'),
(8, 'Arun', 'Farstreet', 'Munich', 'arun@gmail.com', 1234564568, 'M. Tech', 'Male', '2007-04-24', 'nishal_resume.pdf', 'Confirm', 'arun', 'arun', 'What is Your Pet Name?', 'tommy'),
(9, 'Ashish', 'Near MIT', 'Manipal', 'ashish@gmail.com', 8796344213, 'B. Tech', 'Male', '2002-10-17', 'nishal_resume.pdf', 'Pending', 'ashish', 'ashish', 'What is Your Pet Name?', 'Tommy'),
(10, 'Harsh', 'Ram mandir', 'Thane', 'harsh@yahoo.com', 8123456795, 'B. Sc', 'Male', '2021-05-10', 'nishal_resume.pdf', 'Confirm', 'harsh', 'harsh', 'What is Your Pet Name?', 'Doggo');

-- --------------------------------------------------------

--
-- Table structure for table `job_master`
--

CREATE TABLE `job_master` (
  `JobId` int NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`JobId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`) VALUES
(1, 'Google', 'Software Professional Required', 2, 'M.C.A', 'ASP.NET'),
(2, 'Google', 'Marketing Executive Required', 5, 'M.B.A', 'Freshers Are Invited'),
(3, 'TCS Private Limited', 'Software Trainee Required', 1, 'B.Sc.I.T', 'Starting Salary 5000'),
(4, 'Google', 'Cleaners Required', 3, 'S.S.C', 'Part-time job'),
(5, 'TCS Private Limited', 'Cool Job', 5, 'B. Tech', 'Not that cool'),
(6, 'Google', 'Software Engineer', 10, 'B. Tech', 'Need software development skills'),
(7, 'Bajaj Finserv', 'Finance Manager', 10, 'M.B.A', 'Responsible for the financial health of an organization.');

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE `news_master` (
  `NewsId` int NOT NULL,
  `News` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_master`
--

INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES
(1, 'Register and Get JOB', '2020-09-24'),
(2, 'New Vacancies will be updated after diwali', '2019-10-31'),
(3, 'Vacancies for Senior Staff Manager, Register Now!', '2021-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `UserId` int NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`UserId`, `UserName`, `Password`) VALUES
(6, 'admin', 'admin'),
(10, 'xyz', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `walkin_master`
--

CREATE TABLE `walkin_master` (
  `WalkInId` int NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `InterviewDate` date NOT NULL,
  `InterviewTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walkin_master`
--

INSERT INTO `walkin_master` (`WalkInId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`, `InterviewDate`, `InterviewTime`) VALUES
(1, 'Google', 'Freshers Required', 5, 'B.C.A', 'Hardworking Person are Required.', '2020-09-25', '09:00:00'),
(2, 'TCS Private Limited', 'Marketive Representative Invited', 2, 'Pharmacist', 'Ready TO work in North Gujarat', '2020-10-07', '09:00:00'),
(3, 'TCS Private Limited', 'Senior Staff Manager', 3, 'B. Com', 'Disciplined management of staff', '2021-06-15', '10:00:00'),
(7, 'Bajaj Finserv', 'Senior Accountant', 10, 'M. Com', 'Record and book keeping ', '2021-06-02', '15:00:00');

--
-- Indexes for table `application_master`
--
ALTER TABLE `application_master`
  ADD PRIMARY KEY (`ApplicationId`);

--
-- Indexes for table `employer_reg`
--
ALTER TABLE `employer_reg`
  ADD PRIMARY KEY (`EmployerId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackId`);

--
-- Indexes for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  ADD PRIMARY KEY (`EduId`);

--
-- Indexes for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  ADD PRIMARY KEY (`JobSeekId`),
  ADD KEY `JobSeekId` (`JobSeekId`);

--
-- Indexes for table `job_master`
--
ALTER TABLE `job_master`
  ADD PRIMARY KEY (`JobId`);

--
-- Indexes for table `news_master`
--
ALTER TABLE `news_master`
  ADD PRIMARY KEY (`NewsId`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `walkin_master`
--
ALTER TABLE `walkin_master`
  ADD PRIMARY KEY (`WalkInId`);

--
-- AUTO_INCREMENT for table `application_master`
--
ALTER TABLE `application_master`
  MODIFY `ApplicationId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employer_reg`
--
ALTER TABLE `employer_reg`
  MODIFY `EmployerId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  MODIFY `EduId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  MODIFY `JobSeekId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_master`
--
ALTER TABLE `job_master`
  MODIFY `JobId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news_master`
--
ALTER TABLE `news_master`
  MODIFY `NewsId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `UserId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `walkin_master`
--
ALTER TABLE `walkin_master`
  MODIFY `WalkInId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
