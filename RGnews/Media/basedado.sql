/* Exclui a base de dados company caso já exista: */
DROP DATABASE IF EXISTS regiaonews;

/* Cria a base de dados company */
CREATE DATABASE regiaonews;

/*Utiliza a base de dados criada */ 
USE regiaonews;

CREATE TABLE `adminApoiado` (
  `idAdminApoiado` int(11) NOT NULL,
  `nomeCompleto` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `adminstrador` tinyint(1) DEFAULT NULL,
  `resumoBio` varchar(250) NOT NULL,
  `foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `adminApoiado`
--

INSERT INTO `adminApoiado` (`idAdminApoiado`, `nomeCompleto`, `email`, `senha`, `adminstrador`, `resumoBio`, `foto`) VALUES
(1, 'Administradora', 'admin@admin.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '              estutande de informatica                                  ', '623b0da557cd9f5d14c1d060533a711f.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `idnoticias` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `texto_destaque` varchar(500) NOT NULL,
  `texto_completo` varchar(5000) NOT NULL,
  `fotont` varchar(45) NOT NULL,
  `dataNoticia` date DEFAULT NULL,
  `adminApoiadoFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `noticias`
--

INSERT INTO `noticias` (`idnoticias`, `titulo`, `texto_destaque`, `texto_completo`, `fotont`, `dataNoticia`, `adminApoiadoFK`) VALUES
(11, 'Nova noticia Ilustrativa01', '  Cum atque pariatur ut distinctio labore aut officia molestiae quo quisquam praesentium hic nobis facilis inventore velit. Ea perspiciatis suscipit et velit ratione et dolorem quis aut nesciunt esse. Eum cumque qui omnis amet eos sequi eligendi sit animi exercitationem. Qui consequuntur fugiat sit obcaecati architecto in voluptate dolorem aut rerum doloribus a quidem eveniet ut voluptas dolorem 33 consectetur voluptatem.  ', '  Lorem ipsum dolor sit amet. Qui laudantium mollitia est sapiente neque et fuga quae ut quae voluptatem aut autem natus et veritatis rerum nam reiciendis tenetur. Est illo voluptatum ab optio recusandae vel commodi a veritatis illum. A numquam galisum nam possimus maxime qui explicabo velit qui eligendi voluptatem eum beatae earum est optio et impedit quia. Quo laboriosam sapiente non asperiores aliquid in animi possimus sit nobis velit sit debitis ipsa At quos nostrum.\r\n\r\nCum atque pariatur ut distinctio labore aut officia molestiae quo quisquam praesentium hic nobis facilis inventore velit. Ea perspiciatis suscipit et velit ratione et dolorem quis aut nesciunt esse. Eum cumque qui omnis amet eos sequi eligendi sit animi exercitationem. Qui consequuntur fugiat sit obcaecati architecto in voluptate dolorem aut rerum doloribus a quidem eveniet ut voluptas dolorem 33 consectetur voluptatem.', 'a774ddabc43b39cc5ed6cda205664d45.jpg ', '2022-02-12', 1),
(17, 'Noticia Ilustrativa02', ' Et omnis quia ea voluptatem ipsum est nesciunt molestias est enim saepe hic recusandae internos. Est atque quibusdam et quisquam quia et corporis facere. ', ' Lorem ipsum dolor sit amet. Est enim omnis eum itaque eius ea esse alias ab galisum vitae eos debitis dolores et esse veritatis rem modi nobis. In nulla velit nam voluptas necessitatibus sit rerum repudiandae! Qui autem quam ab iste culpa et impedit galisum aut voluptatum exercitationem aut tempore architecto est praesentium dolorum.\r\n\r\nIn laborum quidem non internos minima nam fugit consequatur sed neque quae. Est eligendi neque est voluptatum laudantium sit doloribus consequatur est distinctio reiciendis et inventore voluptatum et maiores galisum est autem dignissimos. Et quos dolorum sit quia reprehenderit est libero vitae?\r\n\r\nEt omnis quia ea voluptatem ipsum est nesciunt molestias est enim saepe hic recusandae internos. Est atque quibusdam et quisquam quia et corporis facere.', '08607982df7cb7ebe845d337a840d6eb.jpg ', '2022-02-12', 1),
(19, 'Noticia Ilustrativa03', '  Et omnis quia ea voluptatem ipsum est nesciunt molestias est enim saepe hic recusandae internos. Est atque quibusdam et quisquam quia et corporis facere.  ', '  Lorem ipsum dolor sit amet. Est enim omnis eum itaque eius ea esse alias ab galisum vitae eos debitis dolores et esse veritatis rem modi nobis. In nulla velit nam voluptas necessitatibus sit rerum repudiandae! Qui autem quam ab iste culpa et impedit galisum aut voluptatum exercitationem aut tempore architecto est praesentium dolorum.\r\n\r\nIn laborum quidem non internos minima nam fugit consequatur sed neque quae. Est eligendi neque est voluptatum laudantium sit doloribus consequatur est distinctio reiciendis et inventore voluptatum et maiores galisum est autem dignissimos. Et quos dolorum sit quia reprehenderit est libero vitae?\r\n\r\nEt omnis quia ea voluptatem ipsum est nesciunt molestias est enim saepe hic recusandae internos. Est atque quibusdam et quisquam quia et corporis facere.', '5fdb1449eb6007389a9590e2e7cb74fc.jpg ', '2022-02-12', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `adminApoiado`
--
ALTER TABLE `adminApoiado`
  ADD PRIMARY KEY (`idAdminApoiado`);

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idnoticias`,`adminApoiadoFK`),
  ADD KEY `adminApoiadoFK` (`adminApoiadoFK`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `adminApoiado`
--
ALTER TABLE `adminApoiado`
  MODIFY `idAdminApoiado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idnoticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`adminApoiadoFK`) REFERENCES `adminApoiado` (`idAdminApoiado`) ON DELETE NO ACTION ON UPDATE NO ACTION;
