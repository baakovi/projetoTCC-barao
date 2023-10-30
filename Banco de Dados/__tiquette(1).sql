-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2023 às 16:44
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `étiquette`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `valor` int(11) NOT NULL,
  `imagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(1) NOT NULL,
  `valor` char(3) NOT NULL,
  `label` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `valor`, `label`) VALUES
(1, 'cam', 'Camisa Social'),
(2, 'ter', 'Terno'),
(3, 'pal', 'Paletó'),
(4, 'cal', 'Calça'),
(5, 'sap', 'Sapato'),
(6, 'gra', 'Gravata'),
(7, 'sus', 'Suspensório'),
(8, 'cin', 'Cinto'),
(9, 'col', 'Colete');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(10) NOT NULL,
  `preco` float DEFAULT NULL,
  `categoria` char(3) NOT NULL,
  `nome_produto` tinytext NOT NULL,
  `descricao_produto` text NOT NULL,
  `detalhes_produto` text NOT NULL,
  `imagem_produto` varchar(50) NOT NULL,
  `destaque` enum('sim','não') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `preco`, `categoria`, `nome_produto`, `descricao_produto`, `detalhes_produto`, `imagem_produto`, `destaque`) VALUES
(1, 200, 'cin', 'Cinto Étiquette de Couro de Jacaré', 'Eleve o seu charme com o nosso exclusivo Cinto Masculino de Couro de Jacaré. Feito com maestria a partir do couro genuíno de jacaré, este cinto é uma verdadeira obra-prima da moda masculina. A textura distinta da pele de jacaré confere um toque de sofisticação e elegância a qualquer traje.', 'Cor: Preto Fosco\r\nEstilo: Cinto\r\nComposição: 100% Couro de Jacaré\r\nCódigo: A4B7C2D8E9F\r\nMarca: Étiquette', 'cinto.png', 'não'),
(2, 169, 'cin', 'Cinto de Couro de Avestruz', 'Este magnífico cinto masculino é uma obra prima da moda, confeccionado com couro de avestruz legítimo, representando a mais alta qualidade e exclusividade. Seu design exuberante e a textura única das pequenas protuberâncias do couro de avestruz criam um acessório que não apenas segura suas calças com estilo, mas também chama atenção e exala sofisticação.', 'Cor: Marrom Zinnwaldita\r\nEstilo: Cinto\r\nComposição: 100% Couro de Avestruz\r\nCódigo: M8N3K5P2R9Q\r\nMarca: Étiquette', 'cinto10.png', 'não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` char(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `senha`, `email`) VALUES
(1, 'Étiquette Oficial', '15122023', 'etiquette_official@gmail.com'),
(2, 'José Fernando', '1234', 'jose@gmail.com'),
(5, 'exemplo', '1234', 'exemplo@gmail.com'),
(6, 'conta', '25f9e794323b453', 'conta@gmail.com'),
(7, 'Renan', 'renan', 'renan@gmail.com'),
(8, 'Ângelo', '$2y$10$d7JJ.iB8', 'angelo@gmail.com'),
(9, 'Heitor', 'thor123', 'thor@gmail.com'),
(10, 'Josué', 'jesusexiste', 'josue@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
