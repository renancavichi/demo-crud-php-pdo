-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Maio-2022 às 21:31
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `computer_store`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `photo` varchar(400) NOT NULL,
  `title` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `photo`, `title`, `price`) VALUES
(2, 'https://a-static.mlcdn.com.br/618x463/computador-completo-intel-core-i5-8gb-hd-500gb-monitor-wifi-f-new/fnew/100000047/5609a2323dbf6a469e5c47769750ef55.jpg', 'Computador Intel 8 Core', 'R$ 2.500,00'),
(3, 'https://a-static.mlcdn.com.br/618x463/computador-completo-intel-core-i7-8gb-hd-2tb-monitor-hdmi-19-5-easypc/3greentechnology/19832/db8df27d363046b3dd5a68af8447ffa9.jpg', 'Intel 64 Super Retina Display', 'R$ 9.999,20'),
(7, 'https://a-static.mlcdn.com.br/618x463/kit-pc-gamer-smart-pc-smt80507-intel-core-i5-8gb-gtx-1050ti-4gb-1tb-monitor-215/shopinfo/1743200u/8b911c4acc71ae4b947e9788c9f2e024.jpg', 'PC Gamer Completo Imperiums i7', 'R$3.300,99'),
(8, 'https://a-static.mlcdn.com.br/618x463/computador-completo-monitor-19-intel-core-i5-8gb-ssd-240gb-hdmi-webcam-windows-10-teclado-e-mouse-cafy-pc/cafypc/15187842752/140baa34a8bf240f7c442d5b3577e556.jpg', 'Intel Core i5 8GB SSD 240GB', 'R$ 2.252,34');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
