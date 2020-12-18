SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
CREATE TABLE `customer` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `customer` (`name`, `email`, `amount`) VALUES
('Aajay', 'aajay@gmail.com', 101000),
('Aakash', 'aakash@gmail.com', 102500),
('Ajay', 'ajay@gmail.com', 100500),
('Barathi', 'barathi@gmail.com', 107000),
('Gokulakrishnan', 'gokulakrishnan@gmail.com', 105500),
('Hari', 'hari@gmail.com', 100000),
('Harish', 'harish@gmail.com', 97500),
('Josewin', 'josewin@gmail.com', 94000),
('Koushik', 'koushik@gmail.com', 99000),
('Vignesh', 'vignesh@gmail.com', 93000);
CREATE TABLE `transaction` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `transaction` (`sender`, `receiver`, `amount`) VALUES
('Josewin', 'Gokulakrishnan', 5500),
('Josewin', 'Ajay', 500),
('Koushik', 'Aajay', 1000),
('Vignesh', 'Barathi', 7000),
('Harish', 'Aakash', 2500);
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;