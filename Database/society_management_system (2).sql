-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 09:18 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `society management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_building`
--

CREATE TABLE `add_building` (
  `slno` int(100) NOT NULL,
  `flat_facilities` varchar(100) NOT NULL,
  `water_charge` varchar(100) NOT NULL,
  `electricity_charge` varchar(100) NOT NULL,
  `monthly_rent` varchar(100) NOT NULL,
  `advance_rent` varchar(100) NOT NULL,
  `water` varchar(100) NOT NULL,
  `electric` varchar(100) NOT NULL,
  `cctv` varchar(100) NOT NULL,
  `lift` varchar(100) NOT NULL,
  `gaurd` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `building_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_building`
--

INSERT INTO `add_building` (`slno`, `flat_facilities`, `water_charge`, `electricity_charge`, `monthly_rent`, `advance_rent`, `water`, `electric`, `cctv`, `lift`, `gaurd`, `img1`, `img2`, `img3`, `building_no`) VALUES
(1, '2BHK', 'Given By Us ', 'Given By Us ', '15000 Rupee (Fifteen Hundred Only)', '50,000 Rupee (Fifty Thousand Only)', '24 Hours', 'Mainly 24 Hours (Department May Cut)', 'Yes We Have', 'Yes We Have', 'Yes ', 'astro.jpg', 'just.jpeg', 'space.jpg', '6984');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `slno` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `complain` varchar(10000) NOT NULL,
  `building_name` varchar(255) NOT NULL,
  `building_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`slno`, `name`, `email`, `complain`, `building_name`, `building_no`) VALUES
(1, 'Rahul Jha', 'rahuljha3246@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia excepturi accusamus et voluptate? Voluptatum\r\n    dolores incidunt, est corporis dolor a excepturi ipsa impedit iusto consequatur quod voluptates tempora tenetur cum\r\n    delectus libero reprehenderit? Natus exercitationem neque reprehenderit voluptatem praesentium, omnis, est atque rem\r\n    quaerat odit dignissimos beatae harum voluptatibus dolores aspernatur? Quae excepturi et, quis, iste officiis fuga\r\n    voluptate saepe harum modi mollitia a, quia esse commodi exercitationem. Sed, natus sint placeat deserunt nisi\r\n    itaque eligendi porro quis voluptates iure repudiandae. Perferendis non blanditiis quidem ipsa possimus distinctio!\r\n    Sequi magnam consectetur nobis fuga quaerat provident, facere autem ea praesentium, cum neque asperiores error ex\r\n    accusamus eligendi unde ut aspernatur dolore quis in quisquam enim reprehenderit, repudiandae exercitationem?\r\n    Reiciendis, officiis! Officiis similique sit deserunt quod temporibus iste, corporis quibusdam illo, quasi aperiam\r\n    cum qui quis reprehenderit vel ullam laudantium beatae amet quas libero necessitatibus ratione repellendus. Ipsam\r\n    vel, illum reprehenderit saepe distinctio commodi ullam id, quo dolorum nemo doloribus corrupti sequi nostrum enim\r\n    cum quasi provident. Quisquam consequatur sapiente praesentium! Eius beatae unde doloribus, voluptates amet\r\n    explicabo similique facilis laboriosam corrupti reprehenderit dicta officia, dolorum impedit obcaecati assumenda\r\n    expedita earum, repellat esse. Accusamus dolor vero obcaecati repellendus tempore, mollitia sunt id illo nam enim,\r\n    alias maxime ratione voluptatibus! Dolorum suscipit cumque, at optio iste aspernatur magnam rem, accusamus illo\r\n    corporis quidem, ipsa vel impedit. Consectetur veritatis aliquam voluptatem expedita sunt numquam quis libero\r\n    perspiciatis odit nemo quia mollitia molestiae delectus id eum sapiente labore autem laborum ratione cumque corrupti\r\n    neque, alias unde similique? Et accusantium a atque quibusdam laudantium sed ratione soluta aspernatur vitae\r\n    blanditiis, ullam eaque, corporis illum iure fuga saepe! Harum, temporibus? Beatae sunt, in recusandae ipsum\r\n    architecto quos eos ipsam, at amet dolore porro nulla quae et tempora vitae neque? Illum, veniam totam! Nesciunt\r\n    cum, officia soluta molestiae commodi dolorem, voluptates recusandae amet, voluptatum libero ipsam dolor odio.\r\n    Perferendis, eius dolorum, nemo laboriosam quia delectus id sint eligendi, voluptatem ratione quod temporibus dicta.\r\n    Magni, cum ullam obcaecati cupiditate veniam quibusdam aliquam quo. Ratione aperiam quo sit sequi quis accusamus\r\n    amet, est quibusdam exercitationem quae dicta quod? Earum tenetur, ea excepturi esse perspiciatis consectetur\r\n    placeat quis delectus quod! Officiis reprehenderit, quaerat saepe aliquid voluptatibus ratione ipsa quod iste\r\n    fugiat? Dolore quia reiciendis provident est minima officia odio quam sed vel quo autem consectetur incidunt ipsum\r\n    illo consequuntur temporibus neque similique, voluptate nihil laboriosam quaerat. Pariatur velit voluptates eos,\r\n    perspiciatis laborum vel eum id eius accusantium? Ducimus quo nesciunt repellat aliquam, animi necessitatibus\r\n    tempora non quae quos pariatur dolore, laboriosam corrupti sapiente, illum autem reiciendis facere. Amet, facere.\r\n    Natus repellendus earum corporis esse numquam tempora cupiditate ullam quisquam quasi, reiciendis optio? Officia\r\n    molestias sapiente esse modi magnam doloremque, id eius rem. Nostrum architecto reprehenderit aspernatur officia\r\n    qui, tempore dolor ipsam mollitia quos dolorum itaque ullam in iusto voluptatibus recusandae deleniti commodi!\r\n    Dolorem impedit ut aspernatur veniam autem asperiores minus rerum eum, ipsam sed in exercitationem repellendus culpa\r\n    cupiditate soluta assumenda aperiam unde perferendis quod molestiae voluptatum maiores. Iure blanditiis, sit ab\r\n    dolore voluptatum necessitatibus voluptates praesentium nemo eius? Repudiandae modi quisquam illo! Ipsa, ad eius.\r\n    Vel veritatis vero modi ad corrupti qui repellat, voluptatem accusantium. Quisquam mollitia molestias, sunt ad\r\n    beatae, dolores magnam enim obcaecati pariatur odit quas? Nihil dolore autem, omnis nesciunt facere similique\r\n    quisquam quos amet id illo ut, fugiat accusamus facilis vitae.\r\n', 'Jha Building', '1459'),
(2, 'Rahul Jha', 'rahuljha3246@gmail.com', ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae neque repellendus enim eaque qui voluptatem dicta\r\n    dolor vitae aliquam minima. Aperiam alias autem excepturi sapiente illum nulla repellat totam eos suscipit, enim,\r\n    dolorum, sint deleniti velit placeat ipsam error eveniet a. Harum porro debitis consequuntur quos beatae\r\n    necessitatibus quia quae quibusdam quasi ratione, cupiditate enim.\r\n', 'Jha Building', '1459');

-- --------------------------------------------------------

--
-- Table structure for table `function`
--

CREATE TABLE `function` (
  `function_slno` int(100) NOT NULL,
  `function_name` varchar(100) NOT NULL,
  `date_of_function` varchar(100) NOT NULL,
  `date_of_function_end` varchar(100) NOT NULL,
  `function_desp` varchar(10000) NOT NULL,
  `function_poster` varchar(100) NOT NULL,
  `function_money` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function`
--

INSERT INTO `function` (`function_slno`, `function_name`, `date_of_function`, `date_of_function_end`, `function_desp`, `function_poster`, `function_money`) VALUES
(2, 'So Our Society is Going To organize a Durga Puja Function.', '2020-10-22', '2020-10-30', 'Our Society is Going to Organize a Durga Puja Like Every Year .All The Members are Requested To attend The Meeting On 5/10/2020.', 'space.jpg', '5000 per House'),
(7, 'So Our Society is Going To organize a Kali Puja Function.', '2020-10-23', '2020-10-31', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, repellat, dicta illo et rerum voluptas\r\n            consequatur corrupti dolores dolore laudantium quam quaerat nesciunt eveniet modi mollitia sequi molestiae\r\n            aliquid velit numquam. Corporis autem quas molestias excepturi atque. Tempora, amet? Perferendis esse\r\n            architecto laudantium officia, culpa veritatis voluptates ipsa quidem, eligendi assumenda, nam nobis enim a!', 'just.jpeg', '500 per Person');

-- --------------------------------------------------------

--
-- Table structure for table `host_meeting`
--

CREATE TABLE `host_meeting` (
  `meeting_slno` int(100) NOT NULL,
  `meeting` varchar(100) NOT NULL,
  `meeting_link` varchar(100) NOT NULL,
  `date_of_meeting` varchar(100) NOT NULL,
  `time_of_meeting` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `host_meeting`
--

INSERT INTO `host_meeting` (`meeting_slno`, `meeting`, `meeting_link`, `date_of_meeting`, `time_of_meeting`) VALUES
(2, 'Society Meeting For Members', 'https://us02web.zoom.us/j/86012087856?pwd=cWFZS01iajUrUXVXT3RZQVFOTnB6UT09', '2020-11-20', '20:35'),
(3, 'Society Meeting', 'https://us02web.zoom.us/j/86012087856?pwd=cWFZS01iajUrUXVXT3RZQVFOTnB6UT09', '2020-10-08', '21:35');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `slno` int(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_desp` varchar(2000) NOT NULL,
  `age_range` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `join_time` varchar(100) NOT NULL,
  `leave_time` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`slno`, `job_title`, `job_desp`, `age_range`, `experience`, `education`, `join_time`, `leave_time`, `salary`) VALUES
(1, 'Gate Gaurd', 'A applicants have to be a security gaurd during night shift . He have to only stand outside society gate in uniform.', '25 years to 40 Years', '4 Years in Gaurd', '12 or less', '22:00', '06:00', '25000/-');

-- --------------------------------------------------------

--
-- Table structure for table `job_applicant`
--

CREATE TABLE `job_applicant` (
  `applicant_slno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `job_id` int(100) NOT NULL,
  `reseume` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_applicant`
--

INSERT INTO `job_applicant` (`applicant_slno`, `name`, `email`, `phone`, `job_id`, `reseume`, `experience`) VALUES
(1, 'Rahul Jha', 'rahuljha3246@gmail.com', '6296002855', 1, 'EVS Assignment of Rahul Jha.pdf', '2 years'),
(2, 'Rahul Jha', 'rahuljha3246@gmail.com', '6296002855', 1, 'admin (4).pdf', '3 years');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_slno` int(100) NOT NULL,
  `notice_title` varchar(100) NOT NULL,
  `notice_desp` varchar(10000) NOT NULL,
  `date_of_notice` varchar(100) NOT NULL,
  `precident_sign` varchar(100) NOT NULL,
  `secretry_sign` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_slno`, `notice_title`, `notice_desp`, `date_of_notice`, `precident_sign`, `secretry_sign`, `date`) VALUES
(2, 'Organization of Durga Puja', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita asperiores porro incidunt\r\n                    blanditiis pariatur, a et dolore optio, rem aliquam in inventore voluptatum quisquam tempore quod\r\n                    dolor dignissimos earum soluta amet odit. Deserunt facilis ut voluptas cum explicabo architecto\r\n                    fugiat ducimus facere dolorum est deleniti tempore debitis illum tempora, vero, aut maxime velit.\r\n                    Reiciendis cupiditate aspernatur esse corporis blanditiis, cumque iusto labore, quia, similique\r\n                    assumenda animi? Praesentium earum quis exercitationem eligendi incidunt aliquid sed aspernatur\r\n                    possimus hic ipsam! Architecto corporis minima tempora, vitae perspiciatis explicabo non quam sed\r\n                    impedit eos? Sit a ipsum temporibus quibusdam voluptates, minus perferendis molestiae dolores amet\r\n                    voluptatem delectus, consectetur sunt ducimus optio odit esse! Vitae vero qui nulla doloribus\r\n                    exercitationem officia deserunt sequi, soluta ad sunt dolorum quibusdam quam veniam minus harum\r\n                    pariatur ex architecto repellat explicabo deleniti corrupti! Eligendi eos quas nobis debitis quia\r\n                    inventore illum nam ab mollitia, cupiditate numquam aut aliquam expedita iusto vero labore? Neque,\r\n                    voluptatem labore error ducimus iure explicabo ab earum asperiores animi eius sit laudantium ipsam\r\n                    odio molestias. Dolorum qui aliquam quisquam libero ducimus! Autem dignissimos distinctio sed quo,\r\n                    totam adipisci eos hic velit aliquid ullam quisquam nihil possimus nam laborum asperiores ad aperiam\r\n                    sapiente voluptates, illum molestiae repellendus. Laborum, labore quaerat, quia, quis maiores\r\n                    deleniti culpa non rem soluta nam excepturi aperiam facere ratione architecto nisi magni magnam\r\n                    delectus esse numquam sunt! Quae, dicta? Quos inventore aut, illo iusto expedita placeat reiciendis.\r\n                    Asperiores repellendus, laborum qui voluptatum eos dolorem corrupti similique labore aperiam\r\n                    praesentium tenetur hic sapiente odio veritatis facere deserunt odit blanditiis optio sequi. Cumque\r\n                    nemo alias ad aliquam, maxime quia enim perferendis possimus ex voluptas officiis, in similique vel\r\n                    ullam repellat odio culpa. Rerum perferendis excepturi exercitationem illum minima? Rem quam earum\r\n                    quia quo, optio nemo deleniti iste eum in, tenetur eos minima. Laborum magnam ipsam maxime debitis\r\n                    recusandae autem consequuntur molestiae? Doloremque cum perferendis magni praesentium quos placeat\r\n                    corrupti debitis fugiat nam! Cumque pariatur dolor iure hic, deleniti et exercitationem quia quidem\r\n                    incidunt dignissimos, excepturi fugiat magnam! Tempore voluptate mollitia necessitatibus earum\r\n                    provident vel ea est sunt veritatis? Similique, explicabo eveniet nostrum quaerat facere at totam\r\n                    delectus laboriosam reprehenderit labore debitis dicta, unde praesentium rerum repellendus in error!\r\n                    Ex non architecto magnam sequi laudantium nam rerum porro similique inventore vitae ipsa in\r\n                    voluptates, nisi, recusandae blanditiis animi assumenda accusamus quam asperiores quia aperiam\r\n                    temporibus cumque nobis? Temporibus doloremque repudiandae quibusdam cumque, id explicabo ipsam\r\n                    dolorem nisi, dolores itaque, saepe blanditiis ab necessitatibus excepturi atque perspiciatis nobis!\r\n                    Minus, corporis praesentium? Illum ut quasi architecto numquam error repellat! Eos, quia. Aspernatur\r\n                    repellat et consequatur iste quia, distinctio quam voluptatem dicta cum doloremque impedit suscipit\r\n                    quae vero eos iure, laboriosam obcaecati magnam ducimus optio! Sapiente corporis culpa eos deleniti\r\n                    illo autem ea ab sit minus facere enim quasi id optio, aliquam similique explicabo, velit laudantium\r\n                    tempora atque blanditiis earum? Voluptate rem asperiores aut earum illum non quidem unde\r\n                    necessitatibus, amet iste minus sequi libero quibusdam ad aspernatur cupiditate beatae nemo alias\r\n                    velit obcaecati optio reiciendis dolorum! Commodi, eligendi blanditiis at, distinctio laudantium\r\n                    eaque, quaerat non consectetur quas beatae id ipsum aut dolores fugiat necessitatibus eveniet quae\r\n                    eos? Earum repellat veritatis nisi impedit. Molestias, ad! Cupiditate iusto natus deleniti minima\r\n                    aliquam veritatis vel tempore debitis voluptatibus ex totam necessitatibus deserunt rerum rem,\r\n                    nobis, soluta eos! Aliquam neque consectetur quaerat consequatur nesciunt architecto assumenda.', '2020-10-02', 'space.jpg', 'IMG_20200306_101448.jpg', '2020-10-04 19:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `slno` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `building_name` varchar(100) NOT NULL,
  `building_no` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `rent` varchar(100) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `fdetails` varchar(100) NOT NULL,
  `bdetails` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`slno`, `name`, `email`, `phone`, `password`, `cpassword`, `building_name`, `building_no`, `floor`, `rent`, `flat`, `aadhar`, `pan`, `fdetails`, `bdetails`, `user`) VALUES
(1, 'Rahul Jha', 'rahuljha3246@gmail.com', '6296002855', 'Rahul', 'Rahul', 'Jha Building', '1459', '5', 'no', '2BHK', '123456987', 'BSGH67845C', 'space.jpg', 'corona.webp', 'admin'),
(3, 'Java', 're@gmail.com', '6296002855', '123', '123', 'Jhjia Building', '6984', '1', 'yes', '2BHK', '1111', '1111', 'just.jpeg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_building`
--
ALTER TABLE `add_building`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `function`
--
ALTER TABLE `function`
  ADD PRIMARY KEY (`function_slno`);

--
-- Indexes for table `host_meeting`
--
ALTER TABLE `host_meeting`
  ADD PRIMARY KEY (`meeting_slno`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `job_applicant`
--
ALTER TABLE `job_applicant`
  ADD PRIMARY KEY (`applicant_slno`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_slno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_building`
--
ALTER TABLE `add_building`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `function`
--
ALTER TABLE `function`
  MODIFY `function_slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `host_meeting`
--
ALTER TABLE `host_meeting`
  MODIFY `meeting_slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `job_applicant`
--
ALTER TABLE `job_applicant`
  MODIFY `applicant_slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
