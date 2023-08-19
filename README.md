# Video Compression Project in Laravel

Welcome to the Video Compression Project in Laravel! This project aims to provide a solution for compressing videos to reduce their size while maintaining acceptable quality. It's built using the Laravel framework.

## Features

- Upload videos for compression.
- Choose compression settings based on quality and output format.
- Monitor compression progress.
- Download compressed videos.

## Table of Contents

- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [Contributing](#contributing)

## Getting Started

### Prerequisites

To run this project, you'll need the following:

- [Laravel](https://laravel.com/docs) installed.
- A compatible web server (e.g., Apache, Nginx).
- PHP and Composer installed.

### Installation

1. Clone the repository:

   ```sh
   git clone https://github.com/SFD153/video-compression.git
   cd video-compression

2. Install dependencies:

    ```sh
    composer install

3. Configure your .env file:

    ```sh
    cp .env.example .env
    php artisan key:generate

4. Run migrations and seeders:

    ```sh
    php artisan migrate --seed

5. Start the development server:

    ```sh
    php artisan serve

## Usage

1. Visit http://localhost:8000 in your web browser.
2. Upload a video for compression.
3. Choose compression settings (quality, format).
4. Monitor the compression progress.
5. Download the compressed video once it's done.

## Configuration
- Modify .env file to configure database settings, storage paths, etc.
- Adjust the compression settings in the app according to your requirements.

## Contributing
Contributions are welcome! If you encounter any bugs or have ideas for improvements, feel free to open an issue or submit a pull request.
