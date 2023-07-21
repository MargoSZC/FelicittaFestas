-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_aula
CREATE DATABASE IF NOT EXISTS `db_aula` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_aula`;

-- Copiando estrutura para tabela db_aula.cardapio
CREATE TABLE IF NOT EXISTS `cardapio` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagemcardapio` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoriacardapio_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cardapio_categoriacardapio_id_foreign` (`categoriacardapio_id`),
  CONSTRAINT `cardapio_categoriacardapio_id_foreign` FOREIGN KEY (`categoriacardapio_id`) REFERENCES `categoriacardapio` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.cardapio: ~7 rows (aproximadamente)
INSERT INTO `cardapio` (`id`, `nome`, `quantidade`, `valor`, `imagemcardapio`, `categoriacardapio_id`, `created_at`, `updated_at`) VALUES
	(5, 'Coxinha', '100', 'R$70,00', 'imagem/20230628174240.jpg', 2, '2023-06-28 20:42:40', '2023-06-28 20:42:40'),
	(6, 'Risoles', '100', 'R$50,00', 'imagem/20230628174334.jpg', 2, '2023-06-28 20:43:34', '2023-06-28 20:43:34'),
	(8, 'Pastel bolha', '150', 'R$85,00', 'imagem/20230628181916.jpg', 3, '2023-06-28 21:19:16', '2023-06-28 21:19:30'),
	(9, 'Pipoca doce', '25', 'R$75,00', 'imagem/20230628182051.jpg', 1, '2023-06-28 21:20:51', '2023-06-28 21:20:51'),
	(10, 'Mini Pizza', '50', 'R$90,00', 'imagem/20230628182225.jpg', 3, '2023-06-28 21:22:25', '2023-06-28 21:22:25'),
	(11, 'Mini hambúrguer', '50', 'R$60,00', 'imagem/20230628182334.jpg', 2, '2023-06-28 21:23:34', '2023-06-28 21:23:34'),
	(12, 'Bolinhas de queijo', '100', 'R$75,00', 'imagem/20230628182427.jpg', 2, '2023-06-28 21:24:27', '2023-06-28 21:24:27');

-- Copiando estrutura para tabela db_aula.categoriacardapio
CREATE TABLE IF NOT EXISTS `categoriacardapio` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.categoriacardapio: ~3 rows (aproximadamente)
INSERT INTO `categoriacardapio` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Doces', NULL, NULL),
	(2, 'Salgados', NULL, NULL),
	(3, 'Bebidas', NULL, NULL);

-- Copiando estrutura para tabela db_aula.categoriapacote
CREATE TABLE IF NOT EXISTS `categoriapacote` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.categoriapacote: ~0 rows (aproximadamente)
INSERT INTO `categoriapacote` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Básico', NULL, NULL),
	(2, 'Econômico', NULL, NULL),
	(3, 'Premium', NULL, NULL);

-- Copiando estrutura para tabela db_aula.categoriaproduto
CREATE TABLE IF NOT EXISTS `categoriaproduto` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.categoriaproduto: ~4 rows (aproximadamente)
INSERT INTO `categoriaproduto` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, '1 a 4 anos', NULL, NULL),
	(2, '5 a 8 anos', NULL, NULL),
	(3, '9 a 12 anos', NULL, NULL),
	(4, 'Acima de 13', NULL, NULL);

-- Copiando estrutura para tabela db_aula.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.cliente: ~2 rows (aproximadamente)
INSERT INTO `cliente` (`id`, `nome`, `telefone`, `email`, `cpf`, `created_at`, `updated_at`) VALUES
	(1, 'Dayanna de Campos Henrique', '49988832143', 'dayanna.h@aluno.ifsc.edu.br', '093.578.489-67', '2023-06-21 20:41:45', '2023-06-21 20:41:45'),
	(2, 'Maria Eduarda Camargo', '49999657438', 'maria.ec2003@aluno.ifsc.edu.br', '045.161.350-35', '2023-06-21 20:41:59', '2023-06-21 20:41:59'),
	(3, 'Julia Vertuoso Pereira', '49999954399', 'julia.v03@gmail.com', '045.972.943-58', '2023-06-28 20:27:51', '2023-06-28 20:27:51'),
	(6, 'Letícia Badin Dall Igna', '49999874152', 'letícia.bd@gmail.com', '045.972.943-58', '2023-06-28 21:17:58', '2023-06-28 21:17:58');

-- Copiando estrutura para tabela db_aula.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.failed_jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2021_06_14_000005_create_categoriacardapio', 1),
	(6, '2023_04_14_165129_create_cliente', 1),
	(7, '2023_04_28_175149_create_categoria_produto_table', 1),
	(9, '2023_06_23_170353_categoriapacote', 2),
	(11, '2023_06_23_170425_pacote', 3);

-- Copiando estrutura para tabela db_aula.pacote
CREATE TABLE IF NOT EXISTS `pacote` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(700) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoriapacote_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pacote_categoriapacote_id_foreign` (`categoriapacote_id`),
  CONSTRAINT `pacote_categoriapacote_id_foreign` FOREIGN KEY (`categoriapacote_id`) REFERENCES `categoriapacote` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.pacote: ~5 rows (aproximadamente)
INSERT INTO `pacote` (`id`, `nome`, `descricao`, `valor`, `imagem`, `categoriapacote_id`, `created_at`, `updated_at`) VALUES
	(4, 'Reino das Princesas', 'Decoração temática de princesas - Bebidas: Refrigerantes variados (6 litros), sucos naturais (3 litros), água (12 garrafas) Comida: Mini sanduíches (40 unidades), salgadinhos variados (150 unidades), bolo de aniversário personalizado, brigadeiros e docinhos (100 unidades) Brinquedos: Castelo inflável, pista de dança com música e luzes, pintura facial', 'R$1500,00', 'imagem/20230628175937.jpeg', 1, '2023-06-28 20:59:37', '2023-06-28 20:59:55'),
	(5, 'Mergulho na Diversão', 'Bebidas: Refrigerantes variados (2 litros), sucos naturais (1 litro). Comida: Salgadinhos variados (100 unidades), mini pizzas (20 unidades), brigadeiros e docinhos (50 unidades). Brinquedos: Cama elástica ou pula-pula inflável', 'R$550,00', 'imagem/20230628180104.jpeg', 1, '2023-06-28 21:01:04', '2023-06-28 21:01:04'),
	(6, 'Exploradores da Alegria', 'Bebidas: Refrigerantes variados (3 litros), sucos naturais (2 litros). Comida: Salgadinhos variados (150 unidades), mini pizzas (30 unidades), mini hambúrgueres (20 unidades), brigadeiros e docinhos (70 unidades), bolo de aniversário. Brinquedos: Cama elástica, pula-pula inflável e piscina de bolinhas.', 'R$780,00', 'imagem/20230628180224.jpeg', 2, '2023-06-28 21:02:24', '2023-06-28 21:02:24'),
	(7, 'Festa dos Sonhos', 'Bebidas: Refrigerantes variados (5 litros), sucos naturais (3 litros), água (24 garrafas), cerveja (12 latas).Comida: Salgadinhos variados (200 unidades), mini pizzas (40 unidades), mini hambúrgueres (30 unidades), brigadeiros e docinhos (100 unidades), bolo de aniversário, tábua de frios.Brinquedos: Cama elástica, pula-pula inflável, piscina de bolinhas e máquina de algodão doce.', 'R$1100,00', 'imagem/20230628180353.jpeg', 3, '2023-06-28 21:03:53', '2023-06-28 21:03:53'),
	(8, 'Mundo dos Piratas', 'Decoração temática de piratas - Bebidas: Refrigerantes variados (3 litros), sucos naturais (2 litros), água (12 garrafas) Comida: Mini cachorros-quentes (30 unidades), salgadinhos variados (100 unidades), pipoca, brigadeiros e docinhos (50 unidades) Brinquedos: Pula-pula inflável, escorregador, caça ao tesouro', 'R$1100,00', 'imagem/20230628181357.jpg', 3, '2023-06-28 21:13:57', '2023-06-28 21:13:57');

-- Copiando estrutura para tabela db_aula.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.password_resets: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.personal_access_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_aula.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagemproduto` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoriaproduto_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produto_categoriaproduto_id_foreign` (`categoriaproduto_id`),
  CONSTRAINT `produto_categoriaproduto_id_foreign` FOREIGN KEY (`categoriaproduto_id`) REFERENCES `categoriaproduto` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.produto: ~0 rows (aproximadamente)
INSERT INTO `produto` (`id`, `nome`, `quantidade`, `valor`, `imagemproduto`, `categoriaproduto_id`, `created_at`, `updated_at`) VALUES
	(1, 'Cama Elástica', '8', 'R$ 300,00', 'imagem/20230628172134.jpg', 1, '2023-06-16 20:46:22', '2023-06-28 20:21:34'),
	(3, 'Futebol de sabão', '3', 'R$ 500,00 unidade', 'imagem/20230628172123.jpg', 3, '2023-06-28 20:21:23', '2023-06-28 20:21:23'),
	(4, 'Escorregador inflável', '2', 'R$ 450,00 unidade', 'imagem/20230628172207.jpg', 2, '2023-06-28 20:22:07', '2023-06-28 20:22:07'),
	(5, 'Piscina de bolinhas', '7', 'R$ 150,00', 'imagem/20230628172259.jpg', 1, '2023-06-28 20:22:59', '2023-06-28 20:22:59'),
	(6, 'Playground', '2', 'R$ 600,00 unidade', 'imagem/20230628172458.jpg', 1, '2023-06-28 20:24:58', '2023-06-28 20:24:58'),
	(8, 'Castelo inflável', '3', 'R$400,00 unidade', 'imagem/20230628174210.jpg', 2, '2023-06-28 20:42:10', '2023-06-28 20:42:10');

-- Copiando estrutura para tabela db_aula.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_aula.users: ~1 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@admin.com', NULL, '$2y$10$64proLIND7wcWsOWRGXL6.Yl8Fnwmbv6qFmqfJFzEmaXn/eOpMmki', 'VFm0jNpQ8YFgu10fAPBLAadLkFOUFOtm9mLOIZS4wtZOMYkCsSayUCuE0g86', '2023-06-16 20:07:03', '2023-06-16 20:07:03');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
