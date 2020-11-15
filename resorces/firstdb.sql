-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 20-09-23 15:50
-- 서버 버전: 8.0.20
-- PHP 버전: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- 데이터베이스: `firstdb`
--

CREATE DATABASE IF NOT EXISTS `firstdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `firstdb`;

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `local` varchar(100) DEFAULT NULL,
  `sign_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- 테이블 구조 `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `post_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id), 
  FOREIGN KEY (userid) REFERENCES user (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

