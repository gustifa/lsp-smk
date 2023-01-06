/*
 Navicat Premium Data Transfer

 Source Server         : 
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : 
 Source Schema         : aposmk

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 04/01/2023 20:08:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_11_18_155949_create_sekolahs_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_11_19_173627_create_presensis_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for presensis
-- ----------------------------
DROP TABLE IF EXISTS `presensis`;
CREATE TABLE `presensis`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sholat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of presensis
-- ----------------------------
INSERT INTO `presensis` VALUES (1, 'Muhammad Alfatih Riski', 'XII TJK1', 'Zuhur', NULL, NULL);
INSERT INTO `presensis` VALUES (2, 'Muhammad Gibran Askara', 'XII TJK2', 'Ashar', NULL, NULL);

-- ----------------------------
-- Table structure for sekolahs
-- ----------------------------
DROP TABLE IF EXISTS `sekolahs`;
CREATE TABLE `sekolahs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `npsn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nss` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `desa_kelurahan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kode_wilayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kode_pos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lintang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bujur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_fax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status_sekolah` int NULL DEFAULT NULL,
  `logo_sekolah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sekolahs
-- ----------------------------
INSERT INTO `sekolahs` VALUES (1, '123456', 'SMK N 1 Kinali', '111111', 'Jalan Teuku Umar KM1', NULL, NULL, NULL, NULL, 'Sumatera Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '202211230337LOGO SMKN1KINALI.png', NULL, '2022-11-23 03:37:39');

-- ----------------------------
-- Table structure for tblsholat
-- ----------------------------
DROP TABLE IF EXISTS `tblsholat`;
CREATE TABLE `tblsholat`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nis` int NULL DEFAULT NULL,
  `Zuhur` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Ashar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tblsholat
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nis` int NULL DEFAULT NULL,
  `Nama` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Jurusan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Kelas` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `RFID_ID` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 505 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 1, 'Hidayat Putra', 'ELKA', '10', '8323795057');
INSERT INTO `user` VALUES (2, 3, 'Hidayat Putra', 'ELKA', '10', '8323795058');
INSERT INTO `user` VALUES (3, 5, 'Hidayat Putra', 'ELKA', '10', '8323795059');
INSERT INTO `user` VALUES (4, 7, 'Hidayat Putra', 'ELKA', '10', '8323795060');
INSERT INTO `user` VALUES (5, 9, 'Hidayat Putra', 'ELKA', '10', '8323795061');
INSERT INTO `user` VALUES (6, 11, 'Hidayat Putra', 'ELKA', '10', '8323795062');
INSERT INTO `user` VALUES (7, 13, 'Hidayat Putra', 'ELKA', '10', '8323795063');
INSERT INTO `user` VALUES (8, 15, 'Hidayat Putra', 'ELKA', '10', '8323795064');
INSERT INTO `user` VALUES (9, 17, 'Hidayat Putra', 'ELKA', '10', '8323795065');
INSERT INTO `user` VALUES (10, 19, 'Hidayat Putra', 'ELKA', '10', '8323795066');
INSERT INTO `user` VALUES (11, 21, 'Hidayat Putra', 'ELKA', '10', '8323795067');
INSERT INTO `user` VALUES (12, 23, 'Hidayat Putra', 'ELKA', '10', '8323795068');
INSERT INTO `user` VALUES (13, 25, 'Hidayat Putra', 'ELKA', '10', '8323795069');
INSERT INTO `user` VALUES (14, 27, 'Hidayat Putra', 'ELKA', '10', '8323795070');
INSERT INTO `user` VALUES (15, 29, 'Hidayat Putra', 'ELKA', '10', '8323795071');
INSERT INTO `user` VALUES (16, 31, 'Hidayat Putra', 'ELKA', '10', '8323795072');
INSERT INTO `user` VALUES (17, 33, 'Hidayat Putra', 'ELKA', '10', '8323795073');
INSERT INTO `user` VALUES (18, 35, 'Hidayat Putra', 'ELKA', '10', '8323795074');
INSERT INTO `user` VALUES (19, 37, 'Hidayat Putra', 'ELKA', '10', '8323795075');
INSERT INTO `user` VALUES (20, 39, 'Hidayat Putra', 'ELKA', '10', '8323795076');
INSERT INTO `user` VALUES (21, 41, 'Hidayat Putra', 'ELKA', '10', '8323795077');
INSERT INTO `user` VALUES (22, 43, 'Hidayat Putra', 'ELKA', '10', '8323795078');
INSERT INTO `user` VALUES (23, 45, 'Hidayat Putra', 'ELKA', '10', '8323795079');
INSERT INTO `user` VALUES (24, 47, 'Hidayat Putra', 'ELKA', '10', '8323795080');
INSERT INTO `user` VALUES (25, 49, 'Hidayat Putra', 'ELKA', '10', '8323795081');
INSERT INTO `user` VALUES (26, 51, 'Hidayat Putra', 'ELKA', '10', '8323795082');
INSERT INTO `user` VALUES (27, 59, 'Putra', 'ELKA', '11', '8323795057');
INSERT INTO `user` VALUES (28, 61, 'Putra', 'ELKA', '11', '8323795058');
INSERT INTO `user` VALUES (29, 63, 'Putra', 'ELKA', '11', '8323795059');
INSERT INTO `user` VALUES (30, 65, 'Putra', 'ELKA', '11', '8323795060');
INSERT INTO `user` VALUES (31, 67, 'Putra', 'ELKA', '11', '8323795061');
INSERT INTO `user` VALUES (32, 69, 'Putra', 'ELKA', '11', '8323795062');
INSERT INTO `user` VALUES (33, 71, 'Putra', 'ELKA', '11', '8323795063');
INSERT INTO `user` VALUES (34, 73, 'Putra', 'ELKA', '11', '8323795064');
INSERT INTO `user` VALUES (35, 75, 'Putra', 'ELKA', '11', '8323795065');
INSERT INTO `user` VALUES (36, 77, 'Putra', 'ELKA', '11', '8323795066');
INSERT INTO `user` VALUES (37, 79, 'Putra', 'ELKA', '11', '8323795067');
INSERT INTO `user` VALUES (38, 81, 'Putra', 'ELKA', '11', '8323795068');
INSERT INTO `user` VALUES (39, 83, 'Putra', 'ELKA', '11', '8323795069');
INSERT INTO `user` VALUES (40, 85, 'Putra', 'ELKA', '11', '8323795070');
INSERT INTO `user` VALUES (41, 87, 'Putra', 'ELKA', '11', '8323795071');
INSERT INTO `user` VALUES (42, 89, 'Putra', 'ELKA', '11', '8323795072');
INSERT INTO `user` VALUES (43, 91, 'Putra', 'ELKA', '11', '8323795073');
INSERT INTO `user` VALUES (44, 93, 'Putra', 'ELKA', '11', '8323795074');
INSERT INTO `user` VALUES (45, 95, 'Putra', 'ELKA', '11', '8323795075');
INSERT INTO `user` VALUES (46, 97, 'Putra', 'ELKA', '11', '8323795076');
INSERT INTO `user` VALUES (47, 99, 'Putra', 'ELKA', '11', '8323795077');
INSERT INTO `user` VALUES (48, 101, 'Putra', 'ELKA', '11', '8323795078');
INSERT INTO `user` VALUES (49, 103, 'Putra', 'ELKA', '11', '8323795079');
INSERT INTO `user` VALUES (50, 105, 'Putra', 'ELKA', '11', '8323795080');
INSERT INTO `user` VALUES (51, 107, 'Putra', 'ELKA', '11', '8323795081');
INSERT INTO `user` VALUES (52, 109, 'Putra', 'ELKA', '11', '8323795082');
INSERT INTO `user` VALUES (53, 117, 'Putri', 'ELKA', '12', '8323795057');
INSERT INTO `user` VALUES (54, 119, 'Putri', 'ELKA', '12', '8323795058');
INSERT INTO `user` VALUES (55, 121, 'Putri', 'ELKA', '12', '8323795059');
INSERT INTO `user` VALUES (56, 123, 'Putri', 'ELKA', '12', '8323795060');
INSERT INTO `user` VALUES (57, 125, 'Putri', 'ELKA', '12', '8323795061');
INSERT INTO `user` VALUES (58, 127, 'Putri', 'ELKA', '12', '8323795062');
INSERT INTO `user` VALUES (59, 129, 'Putri', 'ELKA', '12', '8323795063');
INSERT INTO `user` VALUES (60, 131, 'Putri', 'ELKA', '12', '8323795064');
INSERT INTO `user` VALUES (61, 133, 'Putri', 'ELKA', '12', '8323795065');
INSERT INTO `user` VALUES (62, 135, 'Putri', 'ELKA', '12', '8323795066');
INSERT INTO `user` VALUES (63, 137, 'Putri', 'ELKA', '12', '8323795067');
INSERT INTO `user` VALUES (64, 139, 'Putri', 'ELKA', '12', '8323795068');
INSERT INTO `user` VALUES (65, 141, 'Putri', 'ELKA', '12', '8323795069');
INSERT INTO `user` VALUES (66, 143, 'Putri', 'ELKA', '12', '8323795070');
INSERT INTO `user` VALUES (67, 145, 'Putri', 'ELKA', '12', '8323795071');
INSERT INTO `user` VALUES (68, 147, 'Putri', 'ELKA', '12', '8323795072');
INSERT INTO `user` VALUES (69, 149, 'Putri', 'ELKA', '12', '8323795073');
INSERT INTO `user` VALUES (70, 151, 'Putri', 'ELKA', '12', '8323795074');
INSERT INTO `user` VALUES (71, 153, 'Putri', 'ELKA', '12', '8323795075');
INSERT INTO `user` VALUES (72, 155, 'Putri', 'ELKA', '12', '8323795076');
INSERT INTO `user` VALUES (73, 159, 'Hidayat Putra', 'TKJ', '10', '1323795057');
INSERT INTO `user` VALUES (74, 161, 'Hidayat Putra', 'TKJ', '10', '1323795058');
INSERT INTO `user` VALUES (75, 163, 'Hidayat Putra', 'TKJ', '10', '1323795059');
INSERT INTO `user` VALUES (76, 165, 'Hidayat Putra', 'TKJ', '10', '1323795060');
INSERT INTO `user` VALUES (77, 167, 'Hidayat Putra', 'TKJ', '10', '1323795061');
INSERT INTO `user` VALUES (78, 169, 'Hidayat Putra', 'TKJ', '10', '1323795062');
INSERT INTO `user` VALUES (79, 171, 'Hidayat Putra', 'TKJ', '10', '1323795063');
INSERT INTO `user` VALUES (80, 173, 'Hidayat Putra', 'TKJ', '10', '1323795064');
INSERT INTO `user` VALUES (81, 175, 'Hidayat Putra', 'TKJ', '10', '1323795065');
INSERT INTO `user` VALUES (82, 177, 'Hidayat Putra', 'TKJ', '10', '1323795066');
INSERT INTO `user` VALUES (83, 179, 'Hidayat Putra', 'TKJ', '10', '1323795067');
INSERT INTO `user` VALUES (84, 181, 'Hidayat Putra', 'TKJ', '10', '1323795068');
INSERT INTO `user` VALUES (85, 183, 'Hidayat Putra', 'TKJ', '10', '1323795069');
INSERT INTO `user` VALUES (86, 185, 'Hidayat Putra', 'TKJ', '10', '1323795070');
INSERT INTO `user` VALUES (87, 187, 'Hidayat Putra', 'TKJ', '10', '1323795071');
INSERT INTO `user` VALUES (88, 189, 'Hidayat Putra', 'TKJ', '10', '1323795072');
INSERT INTO `user` VALUES (89, 191, 'Hidayat Putra', 'TKJ', '10', '1323795073');
INSERT INTO `user` VALUES (90, 193, 'Hidayat Putra', 'TKJ', '10', '1323795074');
INSERT INTO `user` VALUES (91, 195, 'Hidayat Putra', 'TKJ', '10', '1323795075');
INSERT INTO `user` VALUES (92, 197, 'Hidayat Putra', 'TKJ', '10', '1323795076');
INSERT INTO `user` VALUES (93, 199, 'Hidayat Putra', 'TKJ', '10', '1323795077');
INSERT INTO `user` VALUES (94, 201, 'Hidayat Putra', 'TKJ', '10', '1323795078');
INSERT INTO `user` VALUES (95, 203, 'Hidayat Putra', 'TKJ', '10', '1323795079');
INSERT INTO `user` VALUES (96, 205, 'Hidayat Putra', 'TKJ', '10', '1323795080');
INSERT INTO `user` VALUES (97, 207, 'Hidayat Putra', 'TKJ', '10', '1323795081');
INSERT INTO `user` VALUES (98, 209, 'Hidayat Putra', 'TKJ', '10', '1323795082');
INSERT INTO `user` VALUES (99, 211, 'Putra', 'TKJ', '11', '1323795083');
INSERT INTO `user` VALUES (100, 213, 'Putra', 'TKJ', '11', '1323795084');
INSERT INTO `user` VALUES (101, 215, 'Putra', 'TKJ', '11', '1323795085');
INSERT INTO `user` VALUES (102, 217, 'Putra', 'TKJ', '11', '1323795086');
INSERT INTO `user` VALUES (103, 219, 'Putra', 'TKJ', '11', '1323795087');
INSERT INTO `user` VALUES (104, 221, 'Putra', 'TKJ', '11', '1323795088');
INSERT INTO `user` VALUES (105, 223, 'Putra', 'TKJ', '11', '1323795089');
INSERT INTO `user` VALUES (106, 225, 'Putra', 'TKJ', '11', '1323795090');
INSERT INTO `user` VALUES (107, 227, 'Putra', 'TKJ', '11', '1323795091');
INSERT INTO `user` VALUES (108, 229, 'Putra', 'TKJ', '11', '1323795092');
INSERT INTO `user` VALUES (109, 231, 'Putra', 'TKJ', '11', '1323795093');
INSERT INTO `user` VALUES (110, 233, 'Putra', 'TKJ', '11', '1323795094');
INSERT INTO `user` VALUES (111, 235, 'Putra', 'TKJ', '11', '1323795095');
INSERT INTO `user` VALUES (112, 237, 'Putra', 'TKJ', '11', '1323795096');
INSERT INTO `user` VALUES (113, 239, 'Putra', 'TKJ', '11', '1323795097');
INSERT INTO `user` VALUES (114, 241, 'Putra', 'TKJ', '11', '1323795098');
INSERT INTO `user` VALUES (115, 243, 'Putra', 'TKJ', '11', '1323795099');
INSERT INTO `user` VALUES (116, 245, 'Putra', 'TKJ', '11', '1323795100');
INSERT INTO `user` VALUES (117, 247, 'Putra', 'TKJ', '11', '1323795101');
INSERT INTO `user` VALUES (118, 249, 'Putra', 'TKJ', '11', '1323795102');
INSERT INTO `user` VALUES (119, 251, 'Putra', 'TKJ', '11', '1323795103');
INSERT INTO `user` VALUES (120, 253, 'Putra', 'TKJ', '11', '1323795104');
INSERT INTO `user` VALUES (121, 255, 'Putra', 'TKJ', '11', '1323795105');
INSERT INTO `user` VALUES (122, 257, 'Putra', 'TKJ', '11', '1323795106');
INSERT INTO `user` VALUES (123, 259, 'Putra', 'TKJ', '11', '1323795107');
INSERT INTO `user` VALUES (124, 261, 'Putra', 'TKJ', '11', '1323795108');
INSERT INTO `user` VALUES (125, 263, 'Putri', 'TKJ', '12', '1323795109');
INSERT INTO `user` VALUES (126, 265, 'Putri', 'TKJ', '12', '1323795110');
INSERT INTO `user` VALUES (127, 267, 'Putri', 'TKJ', '12', '1323795111');
INSERT INTO `user` VALUES (128, 269, 'Putri', 'TKJ', '12', '1323795112');
INSERT INTO `user` VALUES (129, 271, 'Putri', 'TKJ', '12', '1323795113');
INSERT INTO `user` VALUES (130, 273, 'Putri', 'TKJ', '12', '1323795114');
INSERT INTO `user` VALUES (131, 275, 'Putri', 'TKJ', '12', '1323795115');
INSERT INTO `user` VALUES (132, 277, 'Putri', 'TKJ', '12', '1323795116');
INSERT INTO `user` VALUES (133, 279, 'Putri', 'TKJ', '12', '1323795117');
INSERT INTO `user` VALUES (134, 281, 'Putri', 'TKJ', '12', '1323795118');
INSERT INTO `user` VALUES (135, 283, 'Putri', 'TKJ', '12', '1323795119');
INSERT INTO `user` VALUES (136, 285, 'Putri', 'TKJ', '12', '1323795120');
INSERT INTO `user` VALUES (137, 287, 'Putri', 'TKJ', '12', '1323795121');
INSERT INTO `user` VALUES (138, 289, 'Putri', 'TKJ', '12', '1323795122');
INSERT INTO `user` VALUES (139, 291, 'Putri', 'TKJ', '12', '1323795123');
INSERT INTO `user` VALUES (140, 293, 'Putri', 'TKJ', '12', '1323795124');
INSERT INTO `user` VALUES (141, 295, 'Putri', 'TKJ', '12', '1323795125');
INSERT INTO `user` VALUES (142, 297, 'Putri', 'TKJ', '12', '1323795126');
INSERT INTO `user` VALUES (143, 299, 'Putri', 'TKJ', '12', '1323795127');
INSERT INTO `user` VALUES (144, 301, 'Putri', 'TKJ', '12', '1323795128');
INSERT INTO `user` VALUES (145, 305, 'Hidayat Putra', 'TO', '10', '2323795057');
INSERT INTO `user` VALUES (146, 307, 'Hidayat Putra', 'TO', '10', '2323795058');
INSERT INTO `user` VALUES (147, 309, 'Hidayat Putra', 'TO', '10', '2323795059');
INSERT INTO `user` VALUES (148, 311, 'Hidayat Putra', 'TO', '10', '2323795060');
INSERT INTO `user` VALUES (149, 313, 'Hidayat Putra', 'TO', '10', '2323795061');
INSERT INTO `user` VALUES (150, 315, 'Hidayat Putra', 'TO', '10', '2323795062');
INSERT INTO `user` VALUES (151, 317, 'Hidayat Putra', 'TO', '10', '2323795063');
INSERT INTO `user` VALUES (152, 319, 'Hidayat Putra', 'TO', '10', '2323795064');
INSERT INTO `user` VALUES (153, 321, 'Hidayat Putra', 'TO', '10', '2323795065');
INSERT INTO `user` VALUES (154, 323, 'Hidayat Putra', 'TO', '10', '2323795066');
INSERT INTO `user` VALUES (155, 325, 'Hidayat Putra', 'TO', '10', '2323795067');
INSERT INTO `user` VALUES (156, 327, 'Hidayat Putra', 'TO', '10', '2323795068');
INSERT INTO `user` VALUES (157, 329, 'Hidayat Putra', 'TO', '10', '2323795069');
INSERT INTO `user` VALUES (158, 331, 'Hidayat Putra', 'TO', '10', '2323795070');
INSERT INTO `user` VALUES (159, 333, 'Hidayat Putra', 'TO', '10', '2323795071');
INSERT INTO `user` VALUES (160, 335, 'Hidayat Putra', 'TO', '10', '2323795072');
INSERT INTO `user` VALUES (161, 337, 'Hidayat Putra', 'TO', '10', '2323795073');
INSERT INTO `user` VALUES (162, 339, 'Hidayat Putra', 'TO', '10', '2323795074');
INSERT INTO `user` VALUES (163, 341, 'Hidayat Putra', 'TO', '10', '2323795075');
INSERT INTO `user` VALUES (164, 343, 'Hidayat Putra', 'TO', '10', '2323795076');
INSERT INTO `user` VALUES (165, 345, 'Hidayat Putra', 'TO', '10', '2323795077');
INSERT INTO `user` VALUES (166, 347, 'Hidayat Putra', 'TO', '10', '2323795078');
INSERT INTO `user` VALUES (167, 349, 'Hidayat Putra', 'TO', '10', '2323795079');
INSERT INTO `user` VALUES (168, 351, 'Hidayat Putra', 'TO', '10', '2323795080');
INSERT INTO `user` VALUES (169, 353, 'Hidayat Putra', 'TO', '10', '2323795081');
INSERT INTO `user` VALUES (170, 355, 'Hidayat Putra', 'TO', '10', '2323795082');
INSERT INTO `user` VALUES (171, 357, 'Putra', 'TO', '11', '2323795083');
INSERT INTO `user` VALUES (172, 359, 'Putra', 'TO', '11', '2323795084');
INSERT INTO `user` VALUES (173, 361, 'Putra', 'TO', '11', '2323795085');
INSERT INTO `user` VALUES (174, 363, 'Putra', 'TO', '11', '2323795086');
INSERT INTO `user` VALUES (175, 365, 'Putra', 'TO', '11', '2323795087');
INSERT INTO `user` VALUES (176, 367, 'Putra', 'TO', '11', '2323795088');
INSERT INTO `user` VALUES (177, 369, 'Putra', 'TO', '11', '2323795089');
INSERT INTO `user` VALUES (178, 371, 'Putra', 'TO', '11', '2323795090');
INSERT INTO `user` VALUES (179, 373, 'Putra', 'TO', '11', '2323795091');
INSERT INTO `user` VALUES (180, 375, 'Putra', 'TO', '11', '2323795092');
INSERT INTO `user` VALUES (181, 377, 'Putra', 'TO', '11', '2323795093');
INSERT INTO `user` VALUES (182, 379, 'Putra', 'TO', '11', '2323795094');
INSERT INTO `user` VALUES (183, 381, 'Putra', 'TO', '11', '2323795095');
INSERT INTO `user` VALUES (184, 383, 'Putra', 'TO', '11', '2323795096');
INSERT INTO `user` VALUES (185, 385, 'Putra', 'TO', '11', '2323795097');
INSERT INTO `user` VALUES (186, 387, 'Putra', 'TO', '11', '2323795098');
INSERT INTO `user` VALUES (187, 389, 'Putra', 'TO', '11', '2323795099');
INSERT INTO `user` VALUES (188, 391, 'Putra', 'TO', '11', '2323795100');
INSERT INTO `user` VALUES (189, 393, 'Putra', 'TO', '11', '2323795101');
INSERT INTO `user` VALUES (190, 395, 'Putra', 'TO', '11', '2323795102');
INSERT INTO `user` VALUES (191, 397, 'Putra', 'TO', '11', '2323795103');
INSERT INTO `user` VALUES (192, 399, 'Putra', 'TO', '11', '2323795104');
INSERT INTO `user` VALUES (193, 401, 'Putra', 'TO', '11', '2323795105');
INSERT INTO `user` VALUES (194, 403, 'Putra', 'TO', '11', '2323795106');
INSERT INTO `user` VALUES (195, 405, 'Putra', 'TO', '11', '2323795107');
INSERT INTO `user` VALUES (196, 407, 'Putra', 'TO', '11', '2323795108');
INSERT INTO `user` VALUES (197, 409, 'Putri', 'TO', '12', '2323795109');
INSERT INTO `user` VALUES (198, 411, 'Putri', 'TO', '12', '2323795110');
INSERT INTO `user` VALUES (199, 413, 'Putri', 'TO', '12', '2323795111');
INSERT INTO `user` VALUES (200, 415, 'Putri', 'TO', '12', '2323795112');
INSERT INTO `user` VALUES (201, 417, 'Putri', 'TO', '12', '2323795113');
INSERT INTO `user` VALUES (202, 419, 'Putri', 'TO', '12', '2323795114');
INSERT INTO `user` VALUES (203, 421, 'Putri', 'TO', '12', '2323795115');
INSERT INTO `user` VALUES (204, 423, 'Putri', 'TO', '12', '2323795116');
INSERT INTO `user` VALUES (205, 425, 'Putri', 'TO', '12', '2323795117');
INSERT INTO `user` VALUES (206, 427, 'Putri', 'TO', '12', '2323795118');
INSERT INTO `user` VALUES (207, 429, 'Putri', 'TO', '12', '2323795119');
INSERT INTO `user` VALUES (208, 431, 'Putri', 'TO', '12', '2323795120');
INSERT INTO `user` VALUES (209, 433, 'Putri', 'TO', '12', '2323795121');
INSERT INTO `user` VALUES (210, 435, 'Putri', 'TO', '12', '2323795122');
INSERT INTO `user` VALUES (211, 437, 'Putri', 'TO', '12', '2323795123');
INSERT INTO `user` VALUES (212, 439, 'Putri', 'TO', '12', '2323795124');
INSERT INTO `user` VALUES (213, 441, 'Putri', 'TO', '12', '2323795125');
INSERT INTO `user` VALUES (214, 443, 'Putri', 'TO', '12', '2323795126');
INSERT INTO `user` VALUES (215, 445, 'Putri', 'TO', '12', '2323795127');
INSERT INTO `user` VALUES (216, 447, 'Putri', 'TO', '12', '2323795128');
INSERT INTO `user` VALUES (217, 451, 'Hidayat Putra', 'MM', '10', '3323795057');
INSERT INTO `user` VALUES (218, 453, 'Hidayat Putra', 'MM', '10', '3323795058');
INSERT INTO `user` VALUES (219, 455, 'Hidayat Putra', 'MM', '10', '3323795059');
INSERT INTO `user` VALUES (220, 457, 'Hidayat Putra', 'MM', '10', '3323795060');
INSERT INTO `user` VALUES (221, 459, 'Hidayat Putra', 'MM', '10', '3323795061');
INSERT INTO `user` VALUES (222, 461, 'Hidayat Putra', 'MM', '10', '3323795062');
INSERT INTO `user` VALUES (223, 463, 'Hidayat Putra', 'MM', '10', '3323795063');
INSERT INTO `user` VALUES (224, 465, 'Hidayat Putra', 'MM', '10', '3323795064');
INSERT INTO `user` VALUES (225, 467, 'Hidayat Putra', 'MM', '10', '3323795065');
INSERT INTO `user` VALUES (226, 469, 'Hidayat Putra', 'MM', '10', '3323795066');
INSERT INTO `user` VALUES (227, 471, 'Hidayat Putra', 'MM', '10', '3323795067');
INSERT INTO `user` VALUES (228, 473, 'Hidayat Putra', 'MM', '10', '3323795068');
INSERT INTO `user` VALUES (229, 475, 'Hidayat Putra', 'MM', '10', '3323795069');
INSERT INTO `user` VALUES (230, 477, 'Hidayat Putra', 'MM', '10', '3323795070');
INSERT INTO `user` VALUES (231, 479, 'Hidayat Putra', 'MM', '10', '3323795071');
INSERT INTO `user` VALUES (232, 481, 'Hidayat Putra', 'MM', '10', '3323795072');
INSERT INTO `user` VALUES (233, 483, 'Hidayat Putra', 'MM', '10', '3323795073');
INSERT INTO `user` VALUES (234, 485, 'Hidayat Putra', 'MM', '10', '3323795074');
INSERT INTO `user` VALUES (235, 487, 'Hidayat Putra', 'MM', '10', '3323795075');
INSERT INTO `user` VALUES (236, 489, 'Hidayat Putra', 'MM', '10', '3323795076');
INSERT INTO `user` VALUES (237, 491, 'Hidayat Putra', 'MM', '10', '3323795077');
INSERT INTO `user` VALUES (238, 493, 'Hidayat Putra', 'MM', '10', '3323795078');
INSERT INTO `user` VALUES (239, 495, 'Hidayat Putra', 'MM', '10', '3323795079');
INSERT INTO `user` VALUES (240, 497, 'Hidayat Putra', 'MM', '10', '3323795080');
INSERT INTO `user` VALUES (241, 499, 'Hidayat Putra', 'MM', '10', '3323795081');
INSERT INTO `user` VALUES (242, 501, 'Hidayat Putra', 'MM', '10', '3323795082');
INSERT INTO `user` VALUES (243, 503, 'Putra', 'MM', '11', '3323795083');
INSERT INTO `user` VALUES (244, 505, 'Putra', 'MM', '11', '3323795084');
INSERT INTO `user` VALUES (245, 507, 'Putra', 'MM', '11', '3323795085');
INSERT INTO `user` VALUES (246, 509, 'Putra', 'MM', '11', '3323795086');
INSERT INTO `user` VALUES (247, 511, 'Putra', 'MM', '11', '3323795087');
INSERT INTO `user` VALUES (248, 513, 'Putra', 'MM', '11', '3323795088');
INSERT INTO `user` VALUES (249, 515, 'Putra', 'MM', '11', '3323795089');
INSERT INTO `user` VALUES (250, 517, 'Putra', 'MM', '11', '3323795090');
INSERT INTO `user` VALUES (251, 519, 'Putra', 'MM', '11', '3323795091');
INSERT INTO `user` VALUES (252, 521, 'Putra', 'MM', '11', '3323795092');
INSERT INTO `user` VALUES (253, 523, 'Putra', 'MM', '11', '3323795093');
INSERT INTO `user` VALUES (254, 525, 'Putra', 'MM', '11', '3323795094');
INSERT INTO `user` VALUES (255, 527, 'Putra', 'MM', '11', '3323795095');
INSERT INTO `user` VALUES (256, 529, 'Putra', 'MM', '11', '3323795096');
INSERT INTO `user` VALUES (257, 531, 'Putra', 'MM', '11', '3323795097');
INSERT INTO `user` VALUES (258, 533, 'Putra', 'MM', '11', '3323795098');
INSERT INTO `user` VALUES (259, 535, 'Putra', 'MM', '11', '3323795099');
INSERT INTO `user` VALUES (260, 537, 'Putra', 'MM', '11', '3323795100');
INSERT INTO `user` VALUES (261, 539, 'Putra', 'MM', '11', '3323795101');
INSERT INTO `user` VALUES (262, 541, 'Putra', 'MM', '11', '3323795102');
INSERT INTO `user` VALUES (263, 543, 'Putra', 'MM', '11', '3323795103');
INSERT INTO `user` VALUES (264, 545, 'Putra', 'MM', '11', '3323795104');
INSERT INTO `user` VALUES (265, 547, 'Putra', 'MM', '11', '3323795105');
INSERT INTO `user` VALUES (266, 549, 'Putra', 'MM', '11', '3323795106');
INSERT INTO `user` VALUES (267, 551, 'Putra', 'MM', '11', '3323795107');
INSERT INTO `user` VALUES (268, 553, 'Putra', 'MM', '11', '3323795108');
INSERT INTO `user` VALUES (269, 555, 'Putri', 'MM', '12', '3323795109');
INSERT INTO `user` VALUES (270, 557, 'Putri', 'MM', '12', '3323795110');
INSERT INTO `user` VALUES (271, 559, 'Putri', 'MM', '12', '3323795111');
INSERT INTO `user` VALUES (272, 561, 'Putri', 'MM', '12', '3323795112');
INSERT INTO `user` VALUES (273, 563, 'Putri', 'MM', '12', '3323795113');
INSERT INTO `user` VALUES (274, 565, 'Putri', 'MM', '12', '3323795114');
INSERT INTO `user` VALUES (275, 567, 'Putri', 'MM', '12', '3323795115');
INSERT INTO `user` VALUES (276, 569, 'Putri', 'MM', '12', '3323795116');
INSERT INTO `user` VALUES (277, 571, 'Putri', 'MM', '12', '3323795117');
INSERT INTO `user` VALUES (278, 573, 'Putri', 'MM', '12', '3323795118');
INSERT INTO `user` VALUES (279, 575, 'Putri', 'MM', '12', '3323795119');
INSERT INTO `user` VALUES (280, 577, 'Putri', 'MM', '12', '3323795120');
INSERT INTO `user` VALUES (281, 579, 'Putri', 'MM', '12', '3323795121');
INSERT INTO `user` VALUES (282, 581, 'Putri', 'MM', '12', '3323795122');
INSERT INTO `user` VALUES (283, 583, 'Putri', 'MM', '12', '3323795123');
INSERT INTO `user` VALUES (284, 585, 'Putri', 'MM', '12', '3323795124');
INSERT INTO `user` VALUES (285, 587, 'Putri', 'MM', '12', '3323795125');
INSERT INTO `user` VALUES (286, 589, 'Putri', 'MM', '12', '3323795126');
INSERT INTO `user` VALUES (287, 591, 'Putri', 'MM', '12', '3323795127');
INSERT INTO `user` VALUES (288, 593, 'Putri', 'MM', '12', '3323795128');
INSERT INTO `user` VALUES (289, 597, 'Hidayat Putra', 'DKV', '10', '4323795057');
INSERT INTO `user` VALUES (290, 599, 'Hidayat Putra', 'DKV', '10', '4323795058');
INSERT INTO `user` VALUES (291, 601, 'Hidayat Putra', 'DKV', '10', '4323795059');
INSERT INTO `user` VALUES (292, 603, 'Hidayat Putra', 'DKV', '10', '4323795060');
INSERT INTO `user` VALUES (293, 605, 'Hidayat Putra', 'DKV', '10', '4323795061');
INSERT INTO `user` VALUES (294, 607, 'Hidayat Putra', 'DKV', '10', '4323795062');
INSERT INTO `user` VALUES (295, 609, 'Hidayat Putra', 'DKV', '10', '4323795063');
INSERT INTO `user` VALUES (296, 611, 'Hidayat Putra', 'DKV', '10', '4323795064');
INSERT INTO `user` VALUES (297, 613, 'Hidayat Putra', 'DKV', '10', '4323795065');
INSERT INTO `user` VALUES (298, 615, 'Hidayat Putra', 'DKV', '10', '4323795066');
INSERT INTO `user` VALUES (299, 617, 'Hidayat Putra', 'DKV', '10', '4323795067');
INSERT INTO `user` VALUES (300, 619, 'Hidayat Putra', 'DKV', '10', '4323795068');
INSERT INTO `user` VALUES (301, 621, 'Hidayat Putra', 'DKV', '10', '4323795069');
INSERT INTO `user` VALUES (302, 623, 'Hidayat Putra', 'DKV', '10', '4323795070');
INSERT INTO `user` VALUES (303, 625, 'Hidayat Putra', 'DKV', '10', '4323795071');
INSERT INTO `user` VALUES (304, 627, 'Hidayat Putra', 'DKV', '10', '4323795072');
INSERT INTO `user` VALUES (305, 629, 'Hidayat Putra', 'DKV', '10', '4323795073');
INSERT INTO `user` VALUES (306, 631, 'Hidayat Putra', 'DKV', '10', '4323795074');
INSERT INTO `user` VALUES (307, 633, 'Hidayat Putra', 'DKV', '10', '4323795075');
INSERT INTO `user` VALUES (308, 635, 'Hidayat Putra', 'DKV', '10', '4323795076');
INSERT INTO `user` VALUES (309, 637, 'Hidayat Putra', 'DKV', '10', '4323795077');
INSERT INTO `user` VALUES (310, 639, 'Hidayat Putra', 'DKV', '10', '4323795078');
INSERT INTO `user` VALUES (311, 641, 'Hidayat Putra', 'DKV', '10', '4323795079');
INSERT INTO `user` VALUES (312, 643, 'Hidayat Putra', 'DKV', '10', '4323795080');
INSERT INTO `user` VALUES (313, 645, 'Hidayat Putra', 'DKV', '10', '4323795081');
INSERT INTO `user` VALUES (314, 647, 'Hidayat Putra', 'DKV', '10', '4323795082');
INSERT INTO `user` VALUES (315, 649, 'Putra', 'DKV', '11', '4323795083');
INSERT INTO `user` VALUES (316, 651, 'Putra', 'DKV', '11', '4323795084');
INSERT INTO `user` VALUES (317, 653, 'Putra', 'DKV', '11', '4323795085');
INSERT INTO `user` VALUES (318, 655, 'Putra', 'DKV', '11', '4323795086');
INSERT INTO `user` VALUES (319, 657, 'Putra', 'DKV', '11', '4323795087');
INSERT INTO `user` VALUES (320, 659, 'Putra', 'DKV', '11', '4323795088');
INSERT INTO `user` VALUES (321, 661, 'Putra', 'DKV', '11', '4323795089');
INSERT INTO `user` VALUES (322, 663, 'Putra', 'DKV', '11', '4323795090');
INSERT INTO `user` VALUES (323, 665, 'Putra', 'DKV', '11', '4323795091');
INSERT INTO `user` VALUES (324, 667, 'Putra', 'DKV', '11', '4323795092');
INSERT INTO `user` VALUES (325, 669, 'Putra', 'DKV', '11', '4323795093');
INSERT INTO `user` VALUES (326, 671, 'Putra', 'DKV', '11', '4323795094');
INSERT INTO `user` VALUES (327, 673, 'Putra', 'DKV', '11', '4323795095');
INSERT INTO `user` VALUES (328, 675, 'Putra', 'DKV', '11', '4323795096');
INSERT INTO `user` VALUES (329, 677, 'Putra', 'DKV', '11', '4323795097');
INSERT INTO `user` VALUES (330, 679, 'Putra', 'DKV', '11', '4323795098');
INSERT INTO `user` VALUES (331, 681, 'Putra', 'DKV', '11', '4323795099');
INSERT INTO `user` VALUES (332, 683, 'Putra', 'DKV', '11', '4323795100');
INSERT INTO `user` VALUES (333, 685, 'Putra', 'DKV', '11', '4323795101');
INSERT INTO `user` VALUES (334, 687, 'Putra', 'DKV', '11', '4323795102');
INSERT INTO `user` VALUES (335, 689, 'Putra', 'DKV', '11', '4323795103');
INSERT INTO `user` VALUES (336, 691, 'Putra', 'DKV', '11', '4323795104');
INSERT INTO `user` VALUES (337, 693, 'Putra', 'DKV', '11', '4323795105');
INSERT INTO `user` VALUES (338, 695, 'Putra', 'DKV', '11', '4323795106');
INSERT INTO `user` VALUES (339, 697, 'Putra', 'DKV', '11', '4323795107');
INSERT INTO `user` VALUES (340, 699, 'Putra', 'DKV', '11', '4323795108');
INSERT INTO `user` VALUES (341, 701, 'Putri', 'DKV', '12', '4323795109');
INSERT INTO `user` VALUES (342, 703, 'Putri', 'DKV', '12', '4323795110');
INSERT INTO `user` VALUES (343, 705, 'Putri', 'DKV', '12', '4323795111');
INSERT INTO `user` VALUES (344, 707, 'Putri', 'DKV', '12', '4323795112');
INSERT INTO `user` VALUES (345, 709, 'Putri', 'DKV', '12', '4323795113');
INSERT INTO `user` VALUES (346, 711, 'Putri', 'DKV', '12', '4323795114');
INSERT INTO `user` VALUES (347, 713, 'Putri', 'DKV', '12', '4323795115');
INSERT INTO `user` VALUES (348, 715, 'Putri', 'DKV', '12', '4323795116');
INSERT INTO `user` VALUES (349, 717, 'Putri', 'DKV', '12', '4323795117');
INSERT INTO `user` VALUES (350, 719, 'Putri', 'DKV', '12', '4323795118');
INSERT INTO `user` VALUES (351, 721, 'Putri', 'DKV', '12', '4323795119');
INSERT INTO `user` VALUES (352, 723, 'Putri', 'DKV', '12', '4323795120');
INSERT INTO `user` VALUES (353, 725, 'Putri', 'DKV', '12', '4323795121');
INSERT INTO `user` VALUES (354, 727, 'Putri', 'DKV', '12', '4323795122');
INSERT INTO `user` VALUES (355, 729, 'Putri', 'DKV', '12', '4323795123');
INSERT INTO `user` VALUES (356, 731, 'Putri', 'DKV', '12', '4323795124');
INSERT INTO `user` VALUES (357, 733, 'Putri', 'DKV', '12', '4323795125');
INSERT INTO `user` VALUES (358, 735, 'Putri', 'DKV', '12', '4323795126');
INSERT INTO `user` VALUES (359, 737, 'Putri', 'DKV', '12', '4323795127');
INSERT INTO `user` VALUES (360, 739, 'Putri', 'DKV', '12', '4323795128');
INSERT INTO `user` VALUES (361, 743, 'Hidayat Putra', 'OTKP', '10', '5323795057');
INSERT INTO `user` VALUES (362, 745, 'Hidayat Putra', 'OTKP', '10', '5323795058');
INSERT INTO `user` VALUES (363, 747, 'Hidayat Putra', 'OTKP', '10', '5323795059');
INSERT INTO `user` VALUES (364, 749, 'Hidayat Putra', 'OTKP', '10', '5323795060');
INSERT INTO `user` VALUES (365, 751, 'Hidayat Putra', 'OTKP', '10', '5323795061');
INSERT INTO `user` VALUES (366, 753, 'Hidayat Putra', 'OTKP', '10', '5323795062');
INSERT INTO `user` VALUES (367, 755, 'Hidayat Putra', 'OTKP', '10', '5323795063');
INSERT INTO `user` VALUES (368, 757, 'Hidayat Putra', 'OTKP', '10', '5323795064');
INSERT INTO `user` VALUES (369, 759, 'Hidayat Putra', 'OTKP', '10', '5323795065');
INSERT INTO `user` VALUES (370, 761, 'Hidayat Putra', 'OTKP', '10', '5323795066');
INSERT INTO `user` VALUES (371, 763, 'Hidayat Putra', 'OTKP', '10', '5323795067');
INSERT INTO `user` VALUES (372, 765, 'Hidayat Putra', 'OTKP', '10', '5323795068');
INSERT INTO `user` VALUES (373, 767, 'Hidayat Putra', 'OTKP', '10', '5323795069');
INSERT INTO `user` VALUES (374, 769, 'Hidayat Putra', 'OTKP', '10', '5323795070');
INSERT INTO `user` VALUES (375, 771, 'Hidayat Putra', 'OTKP', '10', '5323795071');
INSERT INTO `user` VALUES (376, 773, 'Hidayat Putra', 'OTKP', '10', '5323795072');
INSERT INTO `user` VALUES (377, 775, 'Hidayat Putra', 'OTKP', '10', '5323795073');
INSERT INTO `user` VALUES (378, 777, 'Hidayat Putra', 'OTKP', '10', '5323795074');
INSERT INTO `user` VALUES (379, 779, 'Hidayat Putra', 'OTKP', '10', '5323795075');
INSERT INTO `user` VALUES (380, 781, 'Hidayat Putra', 'OTKP', '10', '5323795076');
INSERT INTO `user` VALUES (381, 783, 'Hidayat Putra', 'OTKP', '10', '5323795077');
INSERT INTO `user` VALUES (382, 785, 'Hidayat Putra', 'OTKP', '10', '5323795078');
INSERT INTO `user` VALUES (383, 787, 'Hidayat Putra', 'OTKP', '10', '5323795079');
INSERT INTO `user` VALUES (384, 789, 'Hidayat Putra', 'OTKP', '10', '5323795080');
INSERT INTO `user` VALUES (385, 791, 'Hidayat Putra', 'OTKP', '10', '5323795081');
INSERT INTO `user` VALUES (386, 793, 'Hidayat Putra', 'OTKP', '10', '5323795082');
INSERT INTO `user` VALUES (387, 795, 'Putra', 'OTKP', '11', '5323795083');
INSERT INTO `user` VALUES (388, 797, 'Putra', 'OTKP', '11', '5323795084');
INSERT INTO `user` VALUES (389, 799, 'Putra', 'OTKP', '11', '5323795085');
INSERT INTO `user` VALUES (390, 801, 'Putra', 'OTKP', '11', '5323795086');
INSERT INTO `user` VALUES (391, 803, 'Putra', 'OTKP', '11', '5323795087');
INSERT INTO `user` VALUES (392, 805, 'Putra', 'OTKP', '11', '5323795088');
INSERT INTO `user` VALUES (393, 807, 'Putra', 'OTKP', '11', '5323795089');
INSERT INTO `user` VALUES (394, 809, 'Putra', 'OTKP', '11', '5323795090');
INSERT INTO `user` VALUES (395, 811, 'Putra', 'OTKP', '11', '5323795091');
INSERT INTO `user` VALUES (396, 813, 'Putra', 'OTKP', '11', '5323795092');
INSERT INTO `user` VALUES (397, 815, 'Putra', 'OTKP', '11', '5323795093');
INSERT INTO `user` VALUES (398, 817, 'Putra', 'OTKP', '11', '5323795094');
INSERT INTO `user` VALUES (399, 819, 'Putra', 'OTKP', '11', '5323795095');
INSERT INTO `user` VALUES (400, 821, 'Putra', 'OTKP', '11', '5323795096');
INSERT INTO `user` VALUES (401, 823, 'Putra', 'OTKP', '11', '5323795097');
INSERT INTO `user` VALUES (402, 825, 'Putra', 'OTKP', '11', '5323795098');
INSERT INTO `user` VALUES (403, 827, 'Putra', 'OTKP', '11', '5323795099');
INSERT INTO `user` VALUES (404, 829, 'Putra', 'OTKP', '11', '5323795100');
INSERT INTO `user` VALUES (405, 831, 'Putra', 'OTKP', '11', '5323795101');
INSERT INTO `user` VALUES (406, 833, 'Putra', 'OTKP', '11', '5323795102');
INSERT INTO `user` VALUES (407, 835, 'Putra', 'OTKP', '11', '5323795103');
INSERT INTO `user` VALUES (408, 837, 'Putra', 'OTKP', '11', '5323795104');
INSERT INTO `user` VALUES (409, 839, 'Putra', 'OTKP', '11', '5323795105');
INSERT INTO `user` VALUES (410, 841, 'Putra', 'OTKP', '11', '5323795106');
INSERT INTO `user` VALUES (411, 843, 'Putra', 'OTKP', '11', '5323795107');
INSERT INTO `user` VALUES (412, 845, 'Putra', 'OTKP', '11', '5323795108');
INSERT INTO `user` VALUES (413, 847, 'Putri', 'OTKP', '12', '5323795109');
INSERT INTO `user` VALUES (414, 849, 'Putri', 'OTKP', '12', '5323795110');
INSERT INTO `user` VALUES (415, 851, 'Putri', 'OTKP', '12', '5323795111');
INSERT INTO `user` VALUES (416, 853, 'Putri', 'OTKP', '12', '5323795112');
INSERT INTO `user` VALUES (417, 855, 'Putri', 'OTKP', '12', '5323795113');
INSERT INTO `user` VALUES (418, 857, 'Putri', 'OTKP', '12', '5323795114');
INSERT INTO `user` VALUES (419, 859, 'Putri', 'OTKP', '12', '5323795115');
INSERT INTO `user` VALUES (420, 861, 'Putri', 'OTKP', '12', '5323795116');
INSERT INTO `user` VALUES (421, 863, 'Putri', 'OTKP', '12', '5323795117');
INSERT INTO `user` VALUES (422, 865, 'Putri', 'OTKP', '12', '5323795118');
INSERT INTO `user` VALUES (423, 867, 'Putri', 'OTKP', '12', '5323795119');
INSERT INTO `user` VALUES (424, 869, 'Putri', 'OTKP', '12', '5323795120');
INSERT INTO `user` VALUES (425, 871, 'Putri', 'OTKP', '12', '5323795121');
INSERT INTO `user` VALUES (426, 873, 'Putri', 'OTKP', '12', '5323795122');
INSERT INTO `user` VALUES (427, 875, 'Putri', 'OTKP', '12', '5323795123');
INSERT INTO `user` VALUES (428, 877, 'Putri', 'OTKP', '12', '5323795124');
INSERT INTO `user` VALUES (429, 879, 'Putri', 'OTKP', '12', '5323795125');
INSERT INTO `user` VALUES (430, 881, 'Putri', 'OTKP', '12', '5323795126');
INSERT INTO `user` VALUES (431, 883, 'Putri', 'OTKP', '12', '5323795127');
INSERT INTO `user` VALUES (432, 885, 'Putri', 'OTKP', '12', '5323795128');
INSERT INTO `user` VALUES (433, 889, 'Hidayat Putra', 'MPLB', '10', '6323795057');
INSERT INTO `user` VALUES (434, 891, 'Hidayat Putra', 'MPLB', '10', '6323795058');
INSERT INTO `user` VALUES (435, 893, 'Hidayat Putra', 'MPLB', '10', '6323795059');
INSERT INTO `user` VALUES (436, 895, 'Hidayat Putra', 'MPLB', '10', '6323795060');
INSERT INTO `user` VALUES (437, 897, 'Hidayat Putra', 'MPLB', '10', '6323795061');
INSERT INTO `user` VALUES (438, 899, 'Hidayat Putra', 'MPLB', '10', '6323795062');
INSERT INTO `user` VALUES (439, 901, 'Hidayat Putra', 'MPLB', '10', '6323795063');
INSERT INTO `user` VALUES (440, 903, 'Hidayat Putra', 'MPLB', '10', '6323795064');
INSERT INTO `user` VALUES (441, 905, 'Hidayat Putra', 'MPLB', '10', '6323795065');
INSERT INTO `user` VALUES (442, 907, 'Hidayat Putra', 'MPLB', '10', '6323795066');
INSERT INTO `user` VALUES (443, 909, 'Hidayat Putra', 'MPLB', '10', '6323795067');
INSERT INTO `user` VALUES (444, 911, 'Hidayat Putra', 'MPLB', '10', '6323795068');
INSERT INTO `user` VALUES (445, 913, 'Hidayat Putra', 'MPLB', '10', '6323795069');
INSERT INTO `user` VALUES (446, 915, 'Hidayat Putra', 'MPLB', '10', '6323795070');
INSERT INTO `user` VALUES (447, 917, 'Hidayat Putra', 'MPLB', '10', '6323795071');
INSERT INTO `user` VALUES (448, 919, 'Hidayat Putra', 'MPLB', '10', '6323795072');
INSERT INTO `user` VALUES (449, 921, 'Hidayat Putra', 'MPLB', '10', '6323795073');
INSERT INTO `user` VALUES (450, 923, 'Hidayat Putra', 'MPLB', '10', '6323795074');
INSERT INTO `user` VALUES (451, 925, 'Hidayat Putra', 'MPLB', '10', '6323795075');
INSERT INTO `user` VALUES (452, 927, 'Hidayat Putra', 'MPLB', '10', '6323795076');
INSERT INTO `user` VALUES (453, 929, 'Hidayat Putra', 'MPLB', '10', '6323795077');
INSERT INTO `user` VALUES (454, 931, 'Hidayat Putra', 'MPLB', '10', '6323795078');
INSERT INTO `user` VALUES (455, 933, 'Hidayat Putra', 'MPLB', '10', '6323795079');
INSERT INTO `user` VALUES (456, 935, 'Hidayat Putra', 'MPLB', '10', '6323795080');
INSERT INTO `user` VALUES (457, 937, 'Hidayat Putra', 'MPLB', '10', '6323795081');
INSERT INTO `user` VALUES (458, 939, 'Hidayat Putra', 'MPLB', '10', '6323795082');
INSERT INTO `user` VALUES (459, 941, 'Putra', 'MPLB', '11', '6323795083');
INSERT INTO `user` VALUES (460, 943, 'Putra', 'MPLB', '11', '6323795084');
INSERT INTO `user` VALUES (461, 945, 'Putra', 'MPLB', '11', '6323795085');
INSERT INTO `user` VALUES (462, 947, 'Putra', 'MPLB', '11', '6323795086');
INSERT INTO `user` VALUES (463, 949, 'Putra', 'MPLB', '11', '6323795087');
INSERT INTO `user` VALUES (464, 951, 'Putra', 'MPLB', '11', '6323795088');
INSERT INTO `user` VALUES (465, 953, 'Putra', 'MPLB', '11', '6323795089');
INSERT INTO `user` VALUES (466, 955, 'Putra', 'MPLB', '11', '6323795090');
INSERT INTO `user` VALUES (467, 957, 'Putra', 'MPLB', '11', '6323795091');
INSERT INTO `user` VALUES (468, 959, 'Putra', 'MPLB', '11', '6323795092');
INSERT INTO `user` VALUES (469, 961, 'Putra', 'MPLB', '11', '6323795093');
INSERT INTO `user` VALUES (470, 963, 'Putra', 'MPLB', '11', '6323795094');
INSERT INTO `user` VALUES (471, 965, 'Putra', 'MPLB', '11', '6323795095');
INSERT INTO `user` VALUES (472, 967, 'Putra', 'MPLB', '11', '6323795096');
INSERT INTO `user` VALUES (473, 969, 'Putra', 'MPLB', '11', '6323795097');
INSERT INTO `user` VALUES (474, 971, 'Putra', 'MPLB', '11', '6323795098');
INSERT INTO `user` VALUES (475, 973, 'Putra', 'MPLB', '11', '6323795099');
INSERT INTO `user` VALUES (476, 975, 'Putra', 'MPLB', '11', '6323795100');
INSERT INTO `user` VALUES (477, 977, 'Putra', 'MPLB', '11', '6323795101');
INSERT INTO `user` VALUES (478, 979, 'Putra', 'MPLB', '11', '6323795102');
INSERT INTO `user` VALUES (479, 981, 'Putra', 'MPLB', '11', '6323795103');
INSERT INTO `user` VALUES (480, 983, 'Putra', 'MPLB', '11', '6323795104');
INSERT INTO `user` VALUES (481, 985, 'Putra', 'MPLB', '11', '6323795105');
INSERT INTO `user` VALUES (482, 987, 'Putra', 'MPLB', '11', '6323795106');
INSERT INTO `user` VALUES (483, 989, 'Putra', 'MPLB', '11', '6323795107');
INSERT INTO `user` VALUES (484, 991, 'Putra', 'MPLB', '11', '6323795108');
INSERT INTO `user` VALUES (485, 993, 'Putri', 'MPLB', '12', '6323795109');
INSERT INTO `user` VALUES (486, 995, 'Putri', 'MPLB', '12', '6323795110');
INSERT INTO `user` VALUES (487, 997, 'Putri', 'MPLB', '12', '6323795111');
INSERT INTO `user` VALUES (488, 999, 'Putri', 'MPLB', '12', '6323795112');
INSERT INTO `user` VALUES (489, 1001, 'Putri', 'MPLB', '12', '6323795113');
INSERT INTO `user` VALUES (490, 1003, 'Putri', 'MPLB', '12', '6323795114');
INSERT INTO `user` VALUES (491, 1005, 'Putri', 'MPLB', '12', '6323795115');
INSERT INTO `user` VALUES (492, 1007, 'Putri', 'MPLB', '12', '6323795116');
INSERT INTO `user` VALUES (493, 1009, 'Putri', 'MPLB', '12', '6323795117');
INSERT INTO `user` VALUES (494, 1011, 'Putri', 'MPLB', '12', '6323795118');
INSERT INTO `user` VALUES (495, 1013, 'Putri', 'MPLB', '12', '6323795119');
INSERT INTO `user` VALUES (496, 1015, 'Putri', 'MPLB', '12', '6323795120');
INSERT INTO `user` VALUES (497, 1017, 'Putri', 'MPLB', '12', '6323795121');
INSERT INTO `user` VALUES (498, 1019, 'Putri', 'MPLB', '12', '6323795122');
INSERT INTO `user` VALUES (499, 1021, 'Putri', 'MPLB', '12', '6323795123');
INSERT INTO `user` VALUES (500, 1023, 'Putri', 'MPLB', '12', '6323795124');
INSERT INTO `user` VALUES (501, 1025, 'Putri', 'MPLB', '12', '6323795125');
INSERT INTO `user` VALUES (502, 1027, 'Putri', 'MPLB', '12', '6323795126');
INSERT INTO `user` VALUES (503, 1029, 'Putri', 'MPLB', '12', '6323795127');
INSERT INTO `user` VALUES (504, 1031, 'Putri', 'MPLB', '12', '6323795128');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `role` enum('admin','wakil','guru','siswa','piket','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin', 'fauzangustifa@gmail.com', NULL, '$2y$10$pSj4ne38rEErErDK0P8DxegMI/4jnuHa72feqnfOcPt0j.tymHdQa', NULL, NULL, NULL, 'admin', 'active', NULL, NULL, NULL);
INSERT INTO `users` VALUES (2, 'guru', 'guru', 'guru@gmail.com', NULL, '$2y$10$/2xmNifmDi2tICfc9j6Z5.kbrmw61JRL9NE/1vLhVMEjYrBHLXcOS', NULL, NULL, NULL, 'guru', 'active', NULL, NULL, NULL);
INSERT INTO `users` VALUES (3, 'user', 'user', 'user@gmail.com', NULL, '$2y$10$9WrkJvvqObMYlxJfmhHm5.47UQAwiVQKoEkx5TDsL/pnwNariUduy', NULL, NULL, NULL, 'user', 'active', NULL, NULL, NULL);
INSERT INTO `users` VALUES (4, 'siswa', 'siswa', 'siswa@gmail.com', NULL, '$2y$10$gp8UwGrWcM5MnShgu056FO4bum6VaOC0J2wxcyFV72LYFQzYs7Lba', NULL, NULL, NULL, 'siswa', 'active', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
