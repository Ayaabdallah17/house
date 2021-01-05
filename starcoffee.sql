-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 09:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starcoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(1, 'WHOLESALE COFFEES', 'include/layout/images/c-lg.jpg'),
(2, 'WHOLESALE TEAS', 'include/layout/images/tea-lg.jpg'),
(3, 'EQUIPMENT', 'include/layout/images/coffee-mach-lg.jpg'),
(4, 'ALLIED', 'include/layout/images/ice-coffee-lg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `des` text NOT NULL,
  `cate_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `des`, `cate_id`, `user_id`) VALUES
(2, 'test comment', 1, 23);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `desc`, `img`, `price`, `category_id`) VALUES
(1, 'Cappuccino', 'A cappuccino is an espresso-based coffee drink that originated in Italy, and is traditionally prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milks, and flavoring with cinnamon or chocolate powder. \r\nAs cappuccino is defined today, in addition to a single shot of espresso, the most important factors in preparing a cappuccino are the texture and temperature of the milk. When a barista steams the milk for a cappuccino, microfoam is created by introducing very tiny bubbles of air into the milk, giving the milk a velvety texture. The traditional cappuccino consists of a single espresso, on which the barista pours the hot foamed milk, resulting in a 2 cm (3⁄4 in) thick milk foam on top. Variations could be made adding another shot of espresso resulting in a double cappuccino. Attaining the correct ratio of foam requires close attention while steaming the milk, thus making the cappuccino one of the most difficult espresso-based beverages to make properly. A skilled barista may obtain artistic shapes (latte art while pouring the milk on the top of the espresso coffee.\r\n', 'include/layout/images/coffee1.jpg', 10, 1),
(2, 'Frappuccino', 'The original Frappuccino drink was developed, named, trademarked and sold by George Howell\'s Eastern Massachusetts coffee shop chain, The Coffee Connection and created by then employee, Andrew Frank. When Starbucks purchased The Coffee Connection in 1994, they also gained the rights to use, make, market, and sell the Frappuccino drink. The drink, with a different recipe, was introduced under the Starbucks name in 1995 and as of 2012, Starbucks had annual Frappuccino sales of over $2 billion. \r\nThe recipe is derived from a fusion of various cold drinks, including the coffee frap (similar to iced coffee) and the frappe (blended ice cream, syrup, and milk), with the Italian cappuccino The recipe today consists of brewed coffee, ice, and other additives such as milk, sugar, flavored syrups, and whipped cream. \r\nMade famous by Starbucks, the Frappuccino is a blended iced coffee drink that’s topped with whipped cream and syrup. But not all Frapps are made the same: watch out for coffee-free versions. Unless you’re into that sort of thing.\r\n', 'include/layout/images/coffee2.jpg', 5.5, 1),
(3, 'Latte macchiato\r\n', 'The new Latte Macchiato features steamed whole milk that is perfectly aerated and free-poured creating dense foam reminiscent of meringue. The beverage is then marked by slowly-poured full espresso shots, creating a signature espresso dot.\r\nLatte macchiato (Italian pronunciation: [ˈlatte makˈkjaːto]) is a coffee beverage; the name means stained or marked milk. Marked as in an espresso stain on the milk used. It is a play on “Espresso macchiato” which is an espresso with a drop or two of milk or cream.\r\nOur Latte Macchiato and classic Latte (also called a Caffè Latte) have the same two ingredients: milk and espresso. But the craft of our baristas is what makes each drink unique. Latte Macchiato is our most espresso forward latte, while Latte has a more balanced, delicate flavor. Explore the differences.\r\n', 'include/layout/images/coffee3.jpg', 6.5, 1),
(4, 'Matcha green tea', 'Matcha and regular green tea both come from the Camellia sinensis plant, which is native to China.\r\nHowever, matcha is grown differently than regular green tea. The tea bushes are shielded from sunlight for about 20–30 days before harvest.\r\nThe shade triggers an increase in chlorophyll levels, which turns the leaves a darker shade of green and increases the production of amino acids.\r\nAfter harvesting, the stems and veins are removed from the leaves. They are then stone-ground into a fine, bright green powder known as matcha.\r\nBecause the whole leaf powder is ingested, matcha is even higher in some substances — such as caffeine and antioxidants — than green tea.\r\nOne cup (237 ml) of standard matcha, made from 4 teaspoons of powder, generally packs about 280 mg of caffeine. This is significantly higher than a cup (237 ml) of regular green tea, which provides 35 mg of caffeine.\r\nHowever, most people don’t drink a full cup (237 ml) of matcha at once because of its high caffeine content. It’s more common to drink 2–4 ounces (59–118 ml). Caffeine content also varies based on how much powder you add.\r\nMatcha, which can have a grassy and bitter taste, is often served with a sweetener or milk. Matcha powder is also popular in smoothies and baking.\r\n', 'include/layout/images/tea1.jpg', 10, 2),
(5, 'Chai latte', 'Our page explores what a chai tea latte is and how to make it, and discusses the distinction between low-quality, instant products made from pre-made concentrates, and ones made from scratch from fresh-brewed tea.\r\nA chai tea latte is similar to, but not the same as the traditional way of preparing masala chai. Traditional masala chai involves decocting (boiling) the tea and spices in a mixture of water and milk, whereas a chai tea latte involves adding a concentrated spiced tea to steamed milk.\r\n\r\nThe difference between these two drinks is analogous to the difference between Café au lait (coffee with milk) and a latte (espresso with steamed milk). As with an espresso latte, in which strong coffee is added to steamed milk, a chai tea latte has a lighter, foamy texture resulting from the steaming of the milk.\r\n', 'include/layout/images/tea2.jpg', 10, 2),
(6, 'Bubble tea', 'Bubble tea (also known as pearl milk tea, bubble milk tea, or boba) (Chinese: 珍珠奶茶; pinyin: zhēnzhū nǎichá, 波霸奶茶; bōbà nǎichá) is a Taiwanese tea-based drink invented in the 1980s, which is shaken with ice to create the \"bubbles\", a foamy layer on top of the drink; chewy tapioca balls (\"pearls\") are added as well.[1][2] Ice-blended versions are frozen and put into a blender, resulting in a slushy consistency.[3] There are many varieties of the drink with a wide range of flavors. The two most popular varieties are black pearl milk tea and green pearl milk tea.\r\nhere are two competing stories for the origin of bubble tea.[8] The Hanlin Tea Room of Tainan, Taiwan, claims that it was invented in 1986 when teahouse owner Tu Tsong-he was inspired by white tapioca balls he saw in the Ya Mu Liao market. He then made tea using the tapioca balls, resulting in the so-called \"pearl tea\".\r\nShortly after, Hanlin changed the white tapioca balls to the black version, mixed with brown sugar or honey that is seen today. At many locations, one can purchase both black tapioca balls and white tapioca balls.\r\n', 'include/layout/images/tea3.jpg', 7.5, 2),
(7, ' Espresso Machine', 'The first step for any independent coffee shop is sourcing coffee beans that will give your drinks the distinct, fresh flavor that will define your brand. The second step is choosing an espresso machine that allows you to transform those beans into lattes, mochas, cappuccinos, and other specialty drinks. These espresso-based drinks will not only draw in customers, but they will boost your revenue more than selling cup after cup of plain, black coffee. While there is used equipment for sale, buying a new espresso machine is recommended since this will be the workhorse of your coffee shop.', 'include/layout/images/equ1.jpg', 100, 3),
(8, 'Espresso Grinder', 'Grinding your beans in house and throughout the day is the key to creating the best drinks possible. In fact, grinding beans even 10 minutes prior to brewing can result in a noticeable decline in the flavor. But, why does freshly grinding coffee beans make such a difference? It increases the surface area of the bean and gives you access to the rich oils and soluble particles that create the distinct taste and aroma of different brews. Espresso grinders are designed to make the ultra-fine grind that espresso machines require to work properly.', 'include/layout/images/equ2.jpg', 30, 3),
(9, 'Frothing Pitchers', 'Necessary for making specialty drinks like lattes and cappuccinos, frothing pitchers are used in conjunction with the steam wand on your espresso machine to foam the milk that is added to the shot of espresso during the drink-making process. The convenient spout on the pitcher also allows your baristas to get creative while adding the milk to the espresso by making artful designs in the cup.', 'include/layout/images/equ3.jpg', 10, 3),
(10, ' Measuring Cups and Spoons', 'Having the right amount of every ingredient is crucial, so make sure you purchase plenty of measuring cups and spoons. Some manufacturers even make measuring scoops specifically for coffee applications.\r\n\r\n', 'include/layout/images/equ4.jpg', 5, 3),
(11, 'Smoothie Mix', 'Today’s health-conscious consumers are demanding more wholesome menu choices. Smoothies are a delicious and nutritious source of energy-boosting fruits. Insta Barista Smoothie Mix features real fruit purees and juices including juicy berries, creamy bananas and velvety mangoes.\r\nInsta Barista is the ultimate fruit smoothie base. Just add your favorite protein powder, collagen or vitamin supplements and blend up some fruity goodness.\r\n', 'include/layout/images/all1.jpg', 7.5, 4),
(12, 'Flavored coffee syrups', 'Elevate an ordinary cup of joe to new heights with the most popular, crave-inducing flavors on the planet. The Insta Barista line of gourmet flavored syrups provide the flavor inspirations of coffeehouse favorites without the high-end price. With just the press of a pump, your customers can immediately enjoy flavors like salted caramel, hazelnut, toffee and more. Sugar free options also available.', 'include/layout/images/all2.jpg', 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(32) NOT NULL,
  `rate` int(5) NOT NULL,
  `product_id` int(32) NOT NULL,
  `user_id` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `rate`, `product_id`, `user_id`) VALUES
(24, 3, 1, 15),
(25, 1, 2, 15),
(26, 1, 3, 15),
(27, 3, 9, 23),
(28, 3, 7, 23);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(15, 'eeee', 'eee', 'h@h.com', '123456'),
(18, 'ayah', 'abdallah', 'ayaabdalla71@yahoo.com', '123456'),
(19, 'Ghadeer', 'ahmad', 'h@g.com', '12345678'),
(20, 'shahd ', 'maher', 'u@u.com', '87654321'),
(21, 'shahd ', 'maher', 'u@u.com', '87654321'),
(22, 'dalia', 'abdallah', 'q@q.com', '00000000'),
(23, 'marim', 'alaa', 's@s.com', '44444444'),
(24, 'maya', 'momo', 'g@g.com', '55555555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
