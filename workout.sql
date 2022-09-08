-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 04:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workout`
--

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL,
  `exercise` varchar(100) NOT NULL,
  `sets` int(20) NOT NULL,
  `reps` int(20) NOT NULL,
  `link` varchar(255) NOT NULL,
  `popular` int(40) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `user_id`, `title`, `type`, `day`, `exercise`, `sets`, `reps`, `link`, `popular`, `status`) VALUES
(99, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Monday', 'Barbell Bench Press', 3, 5, 'https://www.muscleandstrength.com/exercises/barbell-bench-press.html', 1, 0),
(100, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Monday', 'Incline Dumbbell Press', 4, 6, 'https://www.muscleandstrength.com/exercises/incline-dumbbell-bench-press.html', 1, 0),
(101, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Monday', 'Single Arm Dumbbell Lateral Raise', 3, 8, 'https://www.muscleandstrength.com/exercises/one-arm-dumbbell-lateral-raise.html', 1, 0),
(102, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Monday', 'Cable Lateral Raise', 3, 8, 'https://www.muscleandstrength.com/exercises/two-arm-cable-lateral-raise.html', 1, 0),
(103, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Monday', '2 Arm Overhead Dumbbell Extension', 3, 8, 'https://www.muscleandstrength.com/exercises/two-arm-standing-dumbbell-extension.html', 1, 0),
(104, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Monday', 'Close Grip Pressdown', 3, 10, 'https://www.muscleandstrength.com/exercises/cable-tricep-extension-with-v-bar.html', 1, 0),
(105, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Wednesday', 'Pendlay Barbell Row', 3, 5, 'https://www.muscleandstrength.com/exercises/pendlay-row', 1, 0),
(106, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Wednesday', 'Close Grip Pullup', 4, 6, 'https://www.muscleandstrength.com/exercises/close-grip-pull-up.html', 1, 0),
(107, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Wednesday', 'Incline Bench Rear Delt Fly', 3, 8, 'https://www.muscleandstrength.com/exercises/bent-over-rear-delt-fly-head-on-bench', 1, 0),
(108, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Wednesday', 'Upright Row', 3, 8, 'https://www.muscleandstrength.com/exercises/upright-row.html', 1, 0),
(109, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Wednesday', 'Hammer Dumbbell Curl', 3, 8, 'https://www.muscleandstrength.com/exercises/standing-hammer-curl.html', 1, 0),
(110, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Wednesday', 'Machine Curl', 3, 10, 'https://www.muscleandstrength.com/exercises/bicep-machine-curl.html', 1, 0),
(111, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Friday', 'Squat', 3, 5, 'https://www.muscleandstrength.com/exercises/squat.html', 1, 0),
(112, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Friday', 'Single Leg Press', 4, 6, 'https://www.muscleandstrength.com/exercises/one-leg-45-degree-leg-press.html', 1, 0),
(113, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Friday', 'Stiff-Legged Deadlift', 3, 8, 'https://www.muscleandstrength.com/exercises/stiff-leg-deadlift-aka-romanian-deadlift.html', 1, 0),
(114, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Friday', 'Standing Leg Curl', 3, 8, 'https://www.muscleandstrength.com/exercises/stiff-leg-deadlift-aka-romanian-deadlift.html', 1, 0),
(115, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Friday', '2 Arm Overhead Dumbbell Extension', 3, 10, 'https://www.muscleandstrength.com/exercises/seated-calf-raise.html', 1, 0),
(116, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Friday', 'Crunches', 3, 10, 'https://www.muscleandstrength.com/exercises/ab-crunch', 1, 0),
(117, 30, '12 Week Transformation Workout to Help You Build Muscle', 'Build Muscle', 'Friday', 'Hanging Leg Raise', 3, 10, 'https://www.muscleandstrength.com/exercises/hanging-leg-raise.html', 1, 0),
(118, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Monday', 'Squat', 4, 8, 'https://www.muscleandstrength.com/exercises/squat.html', 1, 0),
(119, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Monday', 'Romanian Deadlift', 4, 10, 'https://www.muscleandstrength.com/exercises/romanian-deadlift', 1, 0),
(120, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Monday', 'A1. Leg Curl', 3, 10, 'https://www.muscleandstrength.com/exercises/leg-curl.html', 1, 0),
(121, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Monday', 'A2. Rear Lunge', 3, 10, 'https://www.muscleandstrength.com/exercises/dumbbell-rear-lunge.html', 1, 0),
(122, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Monday', 'Lateral Lunge', 3, 12, 'https://www.muscleandstrength.com/exercises/bodyweight-side-lunge.html', 1, 0),
(123, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Monday', 'Calf Raise', 4, 15, 'https://www.muscleandstrength.com/exercises/seated-calf-raise.html', 1, 0),
(124, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Monday', 'Crunch', 4, 20, 'https://www.muscleandstrength.com/exercises/ab-crunch', 1, 0),
(125, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Wednesday', 'One Arm Dumbbell Row', 4, 8, 'https://www.muscleandstrength.com/exercises/one-arm-dumbbell-row.html', 1, 0),
(126, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Wednesday', 'Incline Dumbbell Bench Press', 4, 8, 'https://www.muscleandstrength.com/exercises/incline-dumbbell-bench-press.html', 1, 0),
(127, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Wednesday', 'Pull Up', 3, 10, 'https://www.muscleandstrength.com/exercises/pull-up', 1, 0),
(128, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Wednesday', 'Bench Press', 3, 10, 'https://www.muscleandstrength.com/exercises/barbell-bench-press.html', 1, 0),
(129, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Wednesday', 'Lateral Raise', 5, 10, 'https://www.muscleandstrength.com/exercises/dumbbell-lateral-raise.html', 1, 0),
(130, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Wednesday', 'Face Pull', 3, 15, 'https://www.muscleandstrength.com/exercises/cable-face-pull', 1, 0),
(131, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Wednesday', 'Lying Leg Raise', 4, 15, 'https://www.muscleandstrength.com/exercises/lying-floor-leg-raise.html', 1, 0),
(132, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Thursday', 'Front Squat', 4, 10, 'https://www.muscleandstrength.com/exercises/front-squat.html', 1, 0),
(133, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Thursday', 'Dumbbell Stiff Legged Deadlift', 4, 10, 'https://www.muscleandstrength.com/exercises/dumbbell-stiff-leg-deadlift.html', 1, 0),
(134, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Thursday', 'Leg Press', 3, 20, 'https://www.muscleandstrength.com/exercises/45-degree-leg-press.html', 1, 0),
(135, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Thursday', 'Split Squat Jump', 3, 8, 'https://www.muscleandstrength.com/exercises/split-squat-jump', 1, 0),
(136, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Thursday', 'Lateral Lunge', 3, 15, 'https://www.muscleandstrength.com/exercises/45-degress-calf-press.html', 1, 0),
(137, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Thursday', 'A2. Donkey Calf Raise', 3, 15, 'https://www.muscleandstrength.com/exercises/donkey-calf-raise.html', 1, 0),
(138, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Thursday', 'Crunch', 4, 20, 'https://www.muscleandstrength.com/exercises/ab-crunch', 1, 0),
(139, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Friday', 'Crunch', 4, 20, 'https://www.muscleandstrength.com/exercises/ab-crunch', 1, 0),
(140, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Friday', 'Dumbbell Stiff Legged Deadlift', 4, 15, 'https://www.muscleandstrength.com/exercises/side-crunch.html', 1, 0),
(141, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Friday', 'Lying Leg Raise', 4, 15, 'https://www.muscleandstrength.com/exercises/lying-floor-leg-raise.html', 1, 0),
(142, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Friday', 'Ab Bicycle', 4, 15, 'https://www.muscleandstrength.com/exercises/abdominal-air-bike.html', 1, 0),
(143, 30, '10 Week Fat Torcher: Fat Burning Program', 'Fat loss', 'Friday', 'Plank', 5, 1, 'https://www.muscleandstrength.com/exercises/hover.html', 1, 0),
(144, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Monday', 'Dumbbell Split Squat', 2, 15, 'https://www.muscleandstrength.com/exercises/dumbbell-split-squat', 1, 0),
(145, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Monday', '(Assisted) Nordic Hamstring Curls', 2, 12, 'https://www.muscleandstrength.com/exercises/partner-assisted-nordic-hamstring-curl', 1, 0),
(146, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Monday', 'Lateral Lunges', 2, 12, 'https://www.muscleandstrength.com/exercises/dumbbell-side-lunge.html', 1, 0),
(147, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Monday', 'Pull Ups', 2, 20, 'https://www.muscleandstrength.com/exercises/pull-up', 1, 0),
(148, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Monday', 'Push Ups', 2, 20, 'https://www.muscleandstrength.com/exercises/push-up.html', 1, 0),
(149, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Monday', 'Banded Rear Delt Fly', 2, 15, 'https://www.muscleandstrength.com/exercises/band-pull-apart', 1, 0),
(150, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Monday', 'Banded Lateral Raise', 2, 15, 'https://www.muscleandstrength.com/exercises/banded-lateral-raise', 1, 0),
(151, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Wednesday', 'Goblet Squat', 2, 15, 'https://www.muscleandstrength.com/exercises/dumbbell-goblet-squat', 1, 0),
(152, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Wednesday', 'Exercise Ball Leg Curl', 2, 12, 'https://www.muscleandstrength.com/exercises/exercise-ball-hamstring-curl', 1, 0),
(153, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Wednesday', 'One Leg Dumbbell Calf Raise', 2, 15, 'https://www.muscleandstrength.com/exercises/exercise-ball-hamstring-curl', 1, 0),
(154, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Wednesday', 'Hip Adduction', 2, 15, 'https://www.muscleandstrength.com/exercises/hip-adduction-machine.html', 1, 0),
(155, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Wednesday', 'Cable Row', 2, 15, 'https://www.muscleandstrength.com/exercises/seated-row.html', 1, 0),
(156, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Wednesday', 'Standing Dumbbell Press', 2, 15, 'https://www.muscleandstrength.com/exercises/standing-dumbbell-press.html', 1, 0),
(157, 30, 'Basketball Workouts: In-Season Workout R', 'Sport', 'Wednesday', 'Dips', 2, 20, 'https://www.muscleandstrength.com/exercises/tricep-dip.html', 1, 0),
(158, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Monday', 'Dumbbell Bench Press', 5, 8, 'https://www.muscleandstrength.com/exercises/dumbbell-bench-press.html', 1, 0),
(159, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Monday', 'Decline Dumbbell Bench Press', 3, 8, 'https://www.muscleandstrength.com/exercises/decline-dumbbell-bench-press.html', 1, 0),
(160, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Monday', 'Dumbbell Floor Press', 3, 8, 'https://www.muscleandstrength.com/exercises/dumbbell-floor-press.html', 1, 0),
(161, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Monday', 'Seated Dumbbell Press', 4, 8, 'https://www.muscleandstrength.com/exercises/seated-dumbbell-press.html', 1, 0),
(162, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Monday', 'Dumbbell Lateral Raise', 3, 8, 'https://www.muscleandstrength.com/exercises/dumbbell-lateral-raise.html', 1, 0),
(163, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Monday', 'Dumbbell Tricep Overhead Extension', 3, 8, 'https://www.muscleandstrength.com/exercises/two-arm-standing-dumbbell-extension.html', 1, 0),
(164, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Tuesday ', 'Dumbbell Bent Over Row', 4, 8, 'https://www.muscleandstrength.com/exercises/bent-over-dumbbell-row.html', 1, 0),
(165, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Tuesday ', 'Chest Supported Dumbbell Row', 4, 8, 'https://www.muscleandstrength.com/exercises/chest-supported-dumbbell-row', 1, 0),
(166, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Tuesday ', 'Dumbbell Pull Over', 3, 10, 'https://www.muscleandstrength.com/exercises/dumbbell-pullover.html', 1, 0),
(167, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Tuesday ', 'Rear Delt Fly', 3, 10, 'https://www.muscleandstrength.com/exercises/bent-over-dumbbell-reverse-fly.html', 1, 0),
(168, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Tuesday ', 'Dumbbell Bicep Curl', 3, 12, 'https://www.muscleandstrength.com/exercises/standing-dumbbell-curl.html', 1, 0),
(169, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Tuesday ', 'Zottman Curl', 3, 12, 'https://www.muscleandstrength.com/exercises/zottman-curl.html', 1, 0),
(170, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Wednesday', 'Dumbbell Squat', 4, 8, 'https://www.muscleandstrength.com/exercises/dumbbell-squat.html', 1, 0),
(171, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Wednesday', 'Dumbbell Stiff Leg Deadlift', 4, 8, 'https://www.muscleandstrength.com/exercises/dumbbell-stiff-leg-deadlift.html', 1, 0),
(172, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Wednesday', 'Dumbbell Goblet Squat', 4, 8, 'https://www.muscleandstrength.com/exercises/dumbbell-goblet-squat', 1, 0),
(173, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Wednesday', 'Dumbbell Hip Thrust', 4, 8, 'https://www.muscleandstrength.com/exercises/dumbbell-goblet-squat', 1, 0),
(174, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Wednesday', 'Dumbbell Lateral Raise', 4, 15, 'https://www.muscleandstrength.com/exercises/seated-dumbbell-calf-raise.html', 1, 0),
(175, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Friday', 'Dumbbell Incline Bench Press', 5, 8, 'https://www.muscleandstrength.com/exercises/incline-dumbbell-bench-press.html', 1, 0),
(176, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Friday', 'Dumbbell Stiff Leg Deadlift', 3, 8, 'https://www.muscleandstrength.com/exercises/dumbbell-flys.html', 1, 0),
(177, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Friday', 'Standing Dumbbell Press', 4, 8, 'https://www.muscleandstrength.com/exercises/standing-dumbbell-press.html', 1, 0),
(178, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Friday', 'Arnold Press', 3, 8, 'https://www.muscleandstrength.com/exercises/seated-arnold-press.html', 1, 0),
(179, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Friday', 'Lateral Raise', 3, 8, 'https://www.muscleandstrength.com/exercises/dumbbell-lateral-raise.html', 1, 0),
(180, 31, '6 Day Dumbbell Workout Split', 'Build Muscle', 'Friday', 'Dumbbell Skullcrusher', 3, 8, 'https://www.muscleandstrength.com/exercises/lying-dumbbell-extension.html', 1, 0),
(181, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Monday', 'Incline Bench Press', 3, 8, 'https://www.muscleandstrength.com/exercises/incline-bench-press.html', 0, 0),
(182, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Monday', 'One Arm Dumbbell Row', 3, 10, 'https://www.muscleandstrength.com/exercises/one-arm-dumbbell-row.html', 0, 0),
(183, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Monday', 'Seated Barbell Press', 3, 8, 'https://www.muscleandstrength.com/exercises/seated-shoulder-press.html', 0, 0),
(184, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Monday', 'Pull Ups', 3, 10, 'https://www.muscleandstrength.com/exercises/wide-grip-pull-up.html', 0, 0),
(185, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Monday', 'Skullcrushers', 3, 10, 'https://www.muscleandstrength.com/exercises/ez-bar-skullcrusher.html', 0, 0),
(186, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Monday', 'Dumbbell Curl', 3, 10, 'https://www.muscleandstrength.com/exercises/alternating-standing-dumbbell-curl.html', 0, 0),
(187, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Tuesday ', 'Squats', 3, 8, 'https://www.muscleandstrength.com/exercises/squat.html', 0, 0),
(188, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Tuesday ', 'Leg Curl', 3, 12, 'https://www.muscleandstrength.com/exercises/leg-curl.html', 0, 0),
(189, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Tuesday ', 'Leg Extension', 3, 12, 'https://www.muscleandstrength.com/exercises/leg-extension.html', 0, 0),
(190, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Tuesday ', 'Leg Press Calf Raise', 3, 15, 'https://www.muscleandstrength.com/exercises/45-degress-calf-press.html', 0, 0),
(191, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Tuesday ', 'Plank', 3, 1, 'https://www.muscleandstrength.com/exercises/hover.html', 0, 0),
(192, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Tuesday ', 'Twisting Hanging Knee Raise', 3, 20, 'https://www.muscleandstrength.com/exercises/twisting-hanging-knee-raise.html', 0, 0),
(193, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Wednesday', 'Dumbbell Bench Press', 3, 10, 'https://www.muscleandstrength.com/exercises/dumbbell-bench-press.html', 0, 0),
(194, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Wednesday', 'Barbell Row', 3, 8, 'https://www.muscleandstrength.com/exercises/bent-over-barbell-row.html', 0, 0),
(195, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Wednesday', 'Dumbbell Lateral Raise', 3, 12, 'https://www.muscleandstrength.com/exercises/dumbbell-lateral-raise.html', 0, 0),
(196, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Wednesday', 'Lat Pull Down', 3, 10, 'https://www.muscleandstrength.com/exercises/lat-pull-down.html', 0, 0),
(197, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Wednesday', 'Skullcrushers', 3, 10, 'https://www.muscleandstrength.com/exercises/tricep-extension.html', 0, 0),
(198, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Wednesday', 'EZ Bar Preacher Curl', 3, 10, 'https://www.muscleandstrength.com/exercises/ez-bar-preacher-curl.html', 0, 0),
(199, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Friday', 'Leg Press', 3, 15, 'https://www.muscleandstrength.com/exercises/45-degree-leg-press.html', 0, 0),
(200, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Friday', 'Barbell Row', 3, 8, 'https://www.muscleandstrength.com/exercises/stiff-leg-deadlift-aka-romanian-deadlift.html', 0, 0),
(201, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Friday', 'Walking Dumbbell Lunge', 3, 10, 'https://www.muscleandstrength.com/exercises/dumbbell-lunge.html', 0, 0),
(202, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Friday', 'Seated Calf Raise', 3, 15, 'https://www.muscleandstrength.com/exercises/seated-calf-raise.html', 0, 0),
(203, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Friday', 'Cable Crunch', 3, 20, 'https://www.muscleandstrength.com/exercises/cable-crunch.html', 0, 0),
(204, 31, 'Complete Fat Loss Workout & Diet Program', 'Fat loss', 'Friday', 'Russian Twist', 3, 20, 'https://www.muscleandstrength.com/exercises/russian-twist.html', 0, 0),
(205, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Monday', 'Squat', 4, 12, 'https://www.muscleandstrength.com/exercises/squat.html', 1, 0),
(206, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Monday', 'Upright Row', 3, 8, 'https://www.muscleandstrength.com/exercises/upright-row.html', 1, 0),
(207, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Monday', 'Wide Grip Pull Up', 3, 0, 'https://www.muscleandstrength.com/exercises/wide-grip-pull-up.html', 1, 0),
(208, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Monday', 'Incline Bench Press', 4, 12, 'https://www.muscleandstrength.com/exercises/incline-bench-press.html', 1, 0),
(209, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Monday', 'Close Grip Bench Press', 3, 6, 'https://www.muscleandstrength.com/exercises/close-grip-bench-press.html', 1, 0),
(210, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Monday', 'Military Press', 3, 8, 'https://www.muscleandstrength.com/exercises/military-press.html', 1, 0),
(211, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Monday', 'Standing Barbell Curl', 3, 8, 'https://www.muscleandstrength.com/exercises/standing-barbell-curl.html', 1, 0),
(212, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Wednesday', 'Squat', 4, 12, 'https://www.muscleandstrength.com/exercises/squat.html', 1, 0),
(213, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Wednesday', 'Upright Row', 3, 8, 'https://www.muscleandstrength.com/exercises/upright-row.html', 1, 0),
(214, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Wednesday', 'Wide Grip Pull Up', 3, 0, 'https://www.muscleandstrength.com/exercises/wide-grip-pull-up.html', 1, 0),
(215, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Wednesday', 'Incline Bench Press', 4, 12, 'https://www.muscleandstrength.com/exercises/incline-bench-press.html', 1, 0),
(216, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Wednesday', 'Close Grip Bench Press', 3, 6, 'https://www.muscleandstrength.com/exercises/close-grip-bench-press.html', 1, 0),
(217, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Wednesday', 'Military Press', 3, 8, 'https://www.muscleandstrength.com/exercises/military-press.html', 1, 0),
(218, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Wednesday', 'Standing Barbell Curl', 3, 8, 'https://www.muscleandstrength.com/exercises/standing-barbell-curl.html', 1, 0),
(219, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Friday', 'Squat', 4, 12, 'https://www.muscleandstrength.com/exercises/squat.html', 1, 0),
(220, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Friday', 'Upright Row', 3, 8, 'https://www.muscleandstrength.com/exercises/upright-row.html', 1, 0),
(221, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Friday', 'Wide Grip Pull Up', 3, 0, 'https://www.muscleandstrength.com/exercises/wide-grip-pull-up.html', 1, 0),
(222, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Friday', 'Incline Bench Press', 4, 12, 'https://www.muscleandstrength.com/exercises/incline-bench-press.html', 1, 0),
(223, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Friday', 'Close Grip Bench Press', 3, 6, 'https://www.muscleandstrength.com/exercises/close-grip-bench-press.html', 1, 0),
(224, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Friday', 'Military Press', 3, 8, 'https://www.muscleandstrength.com/exercises/military-press.html', 1, 0),
(225, 31, '3 Day Whole Body Football Strength Worko', 'Sport', 'Friday', 'Standing Barbell Curl', 3, 8, 'https://www.muscleandstrength.com/exercises/standing-barbell-curl.html', 1, 0),
(226, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Monday', 'Deadlift', 2, 5, 'https://www.muscleandstrength.com/exercises/deadlifts.html', 1, 0),
(227, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Monday', 'One Arm Dumbbell Row', 3, 8, 'https://www.muscleandstrength.com/exercises/one-arm-dumbbell-row.html', 1, 0),
(228, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Monday', 'Wide Grip Pull Up or Lat Pull Down', 3, 10, 'https://www.muscleandstrength.com/exercises/wide-grip-pull-up.html', 1, 0),
(229, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Monday', 'Barbell Row', 3, 8, 'https://www.muscleandstrength.com/exercises/bent-over-barbell-row.html', 1, 0),
(230, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Monday', 'Seated Cable Row or Machine Row', 5, 0, 'https://www.muscleandstrength.com/exercises/seated-row.html', 1, 0),
(231, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Monday', 'EZ Bar Preacher Curl', 3, 10, 'https://www.muscleandstrength.com/exercises/ez-bar-preacher-curl.html', 1, 0),
(232, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Monday', 'Concentration Curl', 3, 10, 'https://www.muscleandstrength.com/exercises/concentration-cur.html', 1, 0),
(233, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Tuesday ', 'Bench Press', 3, 6, 'https://www.muscleandstrength.com/exercises/barbell-bench-press.html', 1, 0),
(234, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Tuesday ', 'Incline Dumbbell Bench Press', 3, 8, 'https://www.muscleandstrength.com/exercises/incline-dumbbell-bench-press.html', 1, 0),
(235, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Tuesday ', 'Chest Dip', 3, 0, 'https://www.muscleandstrength.com/exercises/chest-dip.html', 1, 0),
(236, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Tuesday ', 'Cable Crossover or Pec Dec', 3, 12, 'https://www.muscleandstrength.com/exercises/cable-crossovers.html', 1, 0),
(237, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Tuesday ', 'Machine Press or Dumbbell Bench Press', 5, 0, 'https://www.muscleandstrength.com/exercises/hammer-strength-bench-press.html', 1, 0),
(238, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Tuesday ', 'EZ Bar Skullcrusher', 3, 8, 'https://www.muscleandstrength.com/exercises/ez-bar-skullcrusher.html', 1, 0),
(239, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Tuesday ', 'Two Arm Seated Dumbbell Extension', 3, 8, 'https://www.muscleandstrength.com/exercises/two-arm-dumbbell-extension.html', 1, 0),
(240, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Thursday', 'Squat', 3, 6, 'https://www.muscleandstrength.com/exercises/squat.html', 1, 0),
(241, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Thursday', 'Leg Press', 3, 15, 'https://www.muscleandstrength.com/exercises/45-degree-leg-press.html', 1, 0),
(242, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Thursday', 'Hack Squat or Dumbbell Lunge', 3, 8, 'https://www.muscleandstrength.com/exercises/hack-squat.html', 1, 0),
(243, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Thursday', 'Leg Extension', 5, 0, 'https://www.muscleandstrength.com/exercises/leg-extension.html', 1, 0),
(244, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Thursday', 'Seated Cable Row or Machine Row', 3, 8, 'https://www.muscleandstrength.com/exercises/stiff-leg-deadlift-aka-romanian-deadlift.html', 1, 0),
(245, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Thursday', 'Leg Curl', 5, 0, 'https://www.muscleandstrength.com/exercises/leg-curl.html', 1, 0),
(246, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Thursday', 'Standing Calf Raise', 3, 10, 'https://www.muscleandstrength.com/exercises/standing-calf-raise.html', 1, 0),
(247, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Friday', 'Seated Barbell Press', 3, 6, 'https://www.muscleandstrength.com/exercises/seated-shoulder-press.html', 1, 0),
(248, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Friday', 'Leg Press', 3, 8, 'https://www.muscleandstrength.com/exercises/seated-arnold-press.html', 1, 0),
(249, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Friday', 'Dumbbell Lateral Raise', 3, 10, 'https://www.muscleandstrength.com/exercises/dumbbell-lateral-raise.html', 1, 0),
(250, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Friday', 'Hammer Strength Press or Smith Press', 5, 0, 'https://www.muscleandstrength.com/exercises/smith-machine-shoulder-press.html', 1, 0),
(251, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Friday', 'Upright Row', 3, 8, 'https://www.muscleandstrength.com/exercises/upright-row.html', 1, 0),
(252, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Friday', 'Barbell Shrug or Dumbbell Shrug', 5, 0, 'https://www.muscleandstrength.com/exercises/barbell-shrug.html', 1, 0),
(253, 32, '4 Day Maximum Mass Workout', 'Build Muscle', 'Friday', 'Seated Barbell Wrist Curl', 3, 12, 'https://www.muscleandstrength.com/exercises/barbell-wrist-curl.html', 1, 0),
(254, 32, '4 Day Cutting Routine', 'Fat loss', 'Monday', 'Incline Dumbbell Press', 4, 12, 'https://www.muscleandstrength.com/exercises/incline-dumbbell-bench-press.html', 1, 0),
(255, 32, '4 Day Cutting Routine', 'Fat loss', 'Monday', 'Flat Dumbbell Press', 3, 12, 'https://www.muscleandstrength.com/exercises/dumbbell-bench-press.html', 1, 0),
(256, 32, '4 Day Cutting Routine', 'Fat loss', 'Monday', 'Incline Flys', 3, 12, 'https://www.muscleandstrength.com/exercises/incline-dumbbell-flys.html', 1, 0),
(257, 32, '4 Day Cutting Routine', 'Fat loss', 'Monday', 'Pec Deck', 3, 12, 'https://www.muscleandstrength.com/exercises/pec-dec.html', 1, 0),
(258, 32, '4 Day Cutting Routine', 'Fat loss', 'Monday', 'Skull Crushers', 4, 12, 'https://www.muscleandstrength.com/exercises/lying-tricep-extension.html', 1, 0),
(259, 32, '4 Day Cutting Routine', 'Fat loss', 'Monday', 'Rope Extensions', 3, 12, 'https://www.muscleandstrength.com/exercises/rope-tricep-extension.html', 1, 0),
(260, 32, '4 Day Cutting Routine', 'Fat loss', 'Monday', 'Straight Bar Pushdowns', 3, 12, 'https://www.muscleandstrength.com/exercises/tricep-extension.html', 1, 0),
(261, 32, '4 Day Cutting Routine', 'Fat loss', 'Tuesday ', 'Wide Grip Chins', 4, 12, 'https://www.muscleandstrength.com/exercises/wide-grip-pull-up.html', 1, 0),
(262, 32, '4 Day Cutting Routine', 'Fat loss', 'Tuesday ', 'Wide Grip Rows', 3, 12, 'https://www.muscleandstrength.com/exercises/wide-grip-upright-rows.html', 1, 0),
(263, 32, '4 Day Cutting Routine', 'Fat loss', 'Tuesday ', 'Narrow Grip Pulldown', 4, 12, 'https://www.muscleandstrength.com/exercises/close-grip-pull-down.html', 1, 0),
(264, 32, '4 Day Cutting Routine', 'Fat loss', 'Tuesday ', 'Hyper Extensions', 3, 12, 'https://www.muscleandstrength.com/exercises/hyperextension.html', 1, 0),
(265, 32, '4 Day Cutting Routine', 'Fat loss', 'Tuesday ', 'Concentration Curls', 4, 12, 'https://www.muscleandstrength.com/exercises/concentration-cur.html', 1, 0),
(266, 32, '4 Day Cutting Routine', 'Fat loss', 'Tuesday ', 'EZ Bar Curl', 3, 12, 'https://www.muscleandstrength.com/exercises/standing-barbell-curl.html', 1, 0),
(267, 32, '4 Day Cutting Routine', 'Fat loss', 'Wednesday', 'Squats', 4, 12, 'https://www.muscleandstrength.com/exercises/squat.html', 1, 0),
(268, 32, '4 Day Cutting Routine', 'Fat loss', 'Wednesday', 'Leg Extensions', 3, 12, 'https://www.muscleandstrength.com/exercises/leg-extension.html', 1, 0),
(269, 32, '4 Day Cutting Routine', 'Fat loss', 'Wednesday', 'Leg Curl', 4, 12, 'https://www.muscleandstrength.com/exercises/leg-curl.html', 1, 0),
(270, 32, '4 Day Cutting Routine', 'Fat loss', 'Wednesday', 'Stiff Leg Deadlifts', 3, 12, 'https://www.muscleandstrength.com/exercises/stiff-leg-deadlift-aka-romanian-deadlift.html', 1, 0),
(271, 32, '4 Day Cutting Routine', 'Fat loss', 'Wednesday', 'Skull Crushers', 3, 12, 'https://www.muscleandstrength.com/exercises/seated-calf-raise.html', 1, 0),
(272, 32, '4 Day Cutting Routine', 'Fat loss', 'Wednesday', 'Dumbbell Shoulders Press', 4, 12, 'https://www.muscleandstrength.com/exercises/seated-dumbbell-press.html', 1, 0),
(273, 32, '4 Day Cutting Routine', 'Fat loss', 'Wednesday', 'Cable Lateral Raise', 3, 12, 'https://www.muscleandstrength.com/exercises/one-arm-cable-lateral-raise.html', 1, 0),
(274, 32, '4 Day Cutting Routine', 'Fat loss', 'Friday', 'Incline Barbell Press', 4, 12, 'https://www.muscleandstrength.com/exercises/incline-bench-press.html', 1, 0),
(275, 32, '4 Day Cutting Routine', 'Fat loss', 'Friday', 'Leg Extensions', 3, 12, 'https://www.muscleandstrength.com/exercises/barbell-bench-press.html', 1, 0),
(276, 32, '4 Day Cutting Routine', 'Fat loss', 'Friday', 'Flat Flys', 3, 12, 'https://www.muscleandstrength.com/exercises/dumbbell-flys.html', 1, 0),
(277, 32, '4 Day Cutting Routine', 'Fat loss', 'Friday', 'Cable Crossovers', 3, 12, 'https://www.muscleandstrength.com/exercises/cable-crossovers.html', 1, 0),
(278, 32, '4 Day Cutting Routine', 'Fat loss', 'Friday', 'Reverse Grip Pushdown', 4, 12, 'https://www.muscleandstrength.com/exercises/reverse-grip-tricep-extension.html', 1, 0),
(279, 32, '4 Day Cutting Routine', 'Fat loss', 'Friday', 'Dumbbell Kickbacks', 3, 12, 'https://www.muscleandstrength.com/exercises/tricep-kickback.html', 1, 0),
(280, 32, '4 Day Cutting Routine', 'Fat loss', 'Friday', 'Dumbbell Extension', 3, 12, 'https://www.muscleandstrength.com/exercises/one-arm-dumbbell-extension.html', 1, 0),
(281, 32, 'Complete Off Season Football Workout', 'Sport', 'Monday', 'Jumping Jacks', 1, 1, 'https://www.muscleandstrength.com/exercises/bodyweight-squat.html', 1, 0),
(282, 32, 'Complete Off Season Football Workout', 'Sport', 'Monday', 'High Knees', 1, 1, 'https://www.muscleandstrength.com/exercises/bodyweight-squat.html', 1, 0),
(283, 32, 'Complete Off Season Football Workout', 'Sport', 'Monday', 'Air Squat', 1, 1, 'https://www.muscleandstrength.com/exercises/bodyweight-squat.html', 1, 0),
(284, 32, 'Complete Off Season Football Workout', 'Sport', 'Monday', 'Burpees', 1, 1, 'https://www.muscleandstrength.com/exercises/bodyweight-squat.html', 1, 0),
(285, 32, 'Complete Off Season Football Workout', 'Sport', 'Monday', 'Reverse Crunch', 1, 14, 'https://www.muscleandstrength.com/exercises/bodyweight-squat.html', 1, 0),
(286, 32, 'Complete Off Season Football Workout', 'Sport', 'Monday', 'Alternate V Twist', 1, 8, 'https://www.muscleandstrength.com/exercises/bodyweight-squat.html', 1, 0),
(287, 32, 'Complete Off Season Football Workout', 'Sport', 'Wednesday', 'Front Squat', 4, 10, 'https://www.muscleandstrength.com/exercises/front-squat.html', 1, 0),
(288, 32, 'Complete Off Season Football Workout', 'Sport', 'Wednesday', 'Dips', 4, 8, 'https://www.muscleandstrength.com/exercises/chest-dip.html', 1, 0),
(289, 32, 'Complete Off Season Football Workout', 'Sport', 'Wednesday', 'Chinups', 4, 5, 'https://www.muscleandstrength.com/exercises/chin-up.html', 1, 0),
(290, 32, 'Complete Off Season Football Workout', 'Sport', 'Wednesday', 'Dumbbell Lunges', 3, 20, 'https://www.muscleandstrength.com/exercises/dumbbell-lunge.html', 1, 0),
(291, 32, 'Complete Off Season Football Workout', 'Sport', 'Wednesday', ' One Arm Lat Pulldowns', 3, 8, 'https://www.muscleandstrength.com/exercises/dumbbell-lunge.html', 1, 0),
(292, 32, 'Complete Off Season Football Workout', 'Sport', 'Wednesday', 'Pushups (w/ 3 second negative)', 3, 14, 'https://www.muscleandstrength.com/exercises/push-up.html', 1, 0),
(293, 32, 'Complete Off Season Football Workout', 'Sport', 'Wednesday', 'Partner Hamstring Curls', 3, 5, 'https://www.muscleandstrength.com/exercises/push-up.html', 1, 0),
(294, 32, 'Complete Off Season Football Workout', 'Sport', 'Friday', 'Jumping Jacks', 1, 1, 'https://www.muscleandstrength.com/exercises/bodyweight-squat.html', 1, 0),
(295, 32, 'Complete Off Season Football Workout', 'Sport', 'Friday', 'High Knees', 1, 1, 'https://www.muscleandstrength.com/exercises/barbell-bench-press.html', 1, 0),
(296, 32, 'Complete Off Season Football Workout', 'Sport', 'Friday', ' Air Squat', 1, 1, 'https://www.muscleandstrength.com/exercises/lat-pull-down.html', 1, 0),
(297, 32, 'Complete Off Season Football Workout', 'Sport', 'Friday', 'Hurdle Hops', 3, 12, 'https://www.muscleandstrength.com/exercises/dumbbell-bench-press.html', 1, 0),
(298, 32, 'Complete Off Season Football Workout', 'Sport', 'Friday', 'Reverse Crunch', 4, 14, 'https://www.muscleandstrength.com/exercises/lat-pull-down.html', 1, 0),
(299, 32, 'Complete Off Season Football Workout', 'Sport', 'Friday', 'Dumbbell Lateral Squat', 2, 5, 'https://www.muscleandstrength.com/exercises/dumbbell-bench-press.html', 1, 0),
(300, 32, 'Complete Off Season Football Workout', 'Sport', 'Friday', 'Dumbbell Bench', 3, 10, 'https://www.muscleandstrength.com/exercises/dumbbell-bench-press.html', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `vkey` varchar(30) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cv` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `sname`, `age`, `phone`, `username`, `email`, `password`, `vkey`, `verified`, `user_type`, `create_date`, `cv`, `image`, `status`) VALUES
(30, 'Marko', 'Šimšić', 34, '065292565', 'shime34', 'shime34@gmail.com', 'webProjekat1', '1661363692shime34', 1, 'trainer', '2022-09-08 01:50:23', 'I have been in bodybuilding, fitness and a healthy lifestyle for ten years. And already seven in the coaching business. How I chose this job is simple. I used to play volleyball and work with children. Through that, I realized that I love working with people that leads to their progress and success. Later, life introduced me to this whole story of the gym, proper nutrition, training, and that\'s how I found myself. I have been doing a fulfilling job for many years. That is why I am committed, dedicated and meticulous as a coach. I don\'t have a strictly business relationship with clients for a simple reason: the gym is for people, in addition to some desires and goals, an oasis of \"rest\" from their daily obligations, stress and fast pace of life. That\'s one of the reasons I\'m here; that training with me will bring them to the desired results, but also make the day, week, month better. As far as the clients themselves are concerned, the wishes are various, from ways to change their everyday life, to remove some pain they have had for a long time, to arrange physical preparation for the upcoming season that awaits them in their club. I am ready for all that, and with the excellent client-trainer relationship we have, results are guaranteed. WHY CHOOSE JUST SHIME PROGRAMS? Achieving fitness goals is not easy. Finding the ideal exercises, then finding the time to exercise and staying motivated are common challenges. Going to the gym can be so much more than actually working toward your goal. To lose weight or increase your fitness level, it\'s time to try something different. Just Shime can help you achieve the results you want! until they arrange their physical preparation for the upcoming season that awaits them in their club. I am ready for all that, and with the excellent client-trainer relationship we have, results are guaranteed. WHY CHOOSE JUST SHIME PROGRAMS? Achieving fitness goals is not easy. Finding the ideal exercises, then finding the time to exercise and staying motivated are common challenges. Going to the gym can be so much more than actually working toward your goal. To lose weight or increase your fitness level, it\'s time to try something different. Just Shime can help you achieve the results you want! until they arrange their physical preparation for the upcoming season that awaits them in their club. I am ready for all that, and with the excellent client-trainer relationship we have, results are guaranteed. WHY CHOOSE JUST SHIME PROGRAMS? Achieving fitness goals is not easy. Finding the ideal exercises, then finding the time to exercise and staying motivated are common challenges. Going to the gym can be so much more than actually working toward your goal. To lose weight or increase your fitness level, it\'s time to try something different. Just Shime can help you achieve the results you want! then finding time to exercise and staying motivated are common challenges. Going to the gym can be so much more than actually working toward your goal. To lose weight or increase your fitness level, it\'s time to try something different. Just Shime can help you achieve the results you want! then finding time to exercise and staying motivated are common challenges. Going to the gym can be so much more than actually working toward your goal. To lose weight or increase your fitness level, it\'s time to try something different. Just Shime can help you achieve the results you want!', 'profile4.png', '0'),
(31, 'Dušan', 'Petrović', 32, '063441525', 'dusanFit', 'dusanpetrovic1990@gmail.com', 'webProjekat2', '1661323642dusanFit', 1, 'trainer', '2022-09-08 01:58:12', 'I was born in Niš in 1990. I\'ve been coaching since 2013, and I\'ve been leading clients to successful transformations online since 2017. I have been involved in sports all my life, it has always attracted me. I admired professional athletes, their commitment, discipline, work, appearance... Given that I still didn\'t find myself deep in any sport in order to engage in it and make money from it, I took a different path. In 2008, I entered the Faculty of Electrical Engineering, believing that this profession would be my calling in life. However, at the same time, I trained seriously in the gym, was very dedicated to nutrition and training, and everyone knew me for that from my friends and acquaintances. My mission is to change people\'s (those who want to) way of thinking, to show them that it is very possible to look good and be healthy, and at the same time successful in your business (whatever business you do). Even with good eating and recreation habits, you will be much, much more successful as a lawyer, programmer or doctor than if you eat from your feet and neglect your physical appearance. And the excuses that there is no time are just that, just excuses. The most successful and sought-after businessmen in the world set aside 1 hour every day for sports and eat properly. When they can, anyone can.', 'profile5.jpg', '0'),
(32, 'Strahinja', 'Markovic', 35, '0628984799', 'stralemFit', 'stralemFit@gmail.com', 'webProjekat3', '1361397642stralemFit', 1, 'trainer', '2022-09-08 01:58:08', 'Strahinja Marković is a physical education teacher and fitness trainer. He started his sports career as a handball player. From 1998 to 2005 he played handball for various clubs, and in 2004 he was declared the best goalkeeper of Bačka. Unfortunately, a serious sports injury prevented him from progressing as a handball player. However, he remains in the world of sports and continues to improve at DIF and TIMS in Novi Sad. Today he works as a fitness instructor, bodybuilding coach and personal trainer. In the premises of the Rowing Club \"Danubius 1885\" in Novi Sad, it holds group recreational trainings and trainings for individuals. In the \"Vojvodina\" Athletic Club, he worked as an assistant coach to Kamasi Ferenc. Then he was engaged in the \"Danubius 1885\" Rowing Club, where he worked as an assistant coach to Petar Ibročić and coached cadet and youth national team members. After a successful collaboration with rowers, Strahinja Marković devoted himself to the \"Vojvodina\" handball club, where he worked as a fitness coach of the first team, assistant coach to Dragan Kukić and goalkeeper coach. Rich club experience led him to start an independent career. As a fitness instructor and personal trainer, he trained numerous celebrities from the world of sports and entertainment. The most successful Serbian rower Ivana Filipović, Miss Vojvodina Sonja Šuvljakov, the star of the movie \"White Lions\" Monika Kish and the basketball player of the Serbian youth national team Aleksa Glišić are just a few of them. In working with individuals, each program is created in cooperation with the participant, in order to achieve the best results and achieve the desired goal. Personal training does not only include a set of exercises, but it is necessary to monitor the progress of the individual, correct his diet and optimize the exercises depending on the progress. A personal approach to all training segments and dedication to the individual is what sets Strahinja apart from others. His task is not only fitness, desired physical appearance or mass. Strahinja\'s goal is to achieve results, with maximum commitment to improving the physical, spiritual and health condition of the individual.', 'profile6.jpg', '0'),
(43, 'Nemanja', 'Nimcevic', 41, '0652977851', 'nemanja41', 'nemanjan41@gmail.com', '$2y$10$UtNfVjCQXUVvBok.ThwE4.8', '1661363692nemanja41', 1, 'user', '2022-09-08 01:58:27', '', '', '0'),
(44, 'Milos', 'Petric', 22, '061383964', 'petric22', 'petricmilos22@gmail.com', 'webProjekat5', '1661363692petric22', 1, 'user', '2022-09-08 01:58:15', '', 'avatar.png', '0'),
(45, 'Lazar', 'Vojnic', 37, '069878489', 'lazar37', 'lazarv37@gmail.com', 'webProjekat6', '1661323642lazar37', 1, 'admin', '2022-09-08 01:40:52', '', 'avatar.png', '0'),
(60, 'Milan', 'Petkovic', 26, '555333', 'milan96', 'petkovicstevan01@gmail.com', 'webProjekat7', '1662602000milna96', 1, 'user', '2022-09-08 01:53:51', '', 'avatar.png', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Test1` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `Test1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
