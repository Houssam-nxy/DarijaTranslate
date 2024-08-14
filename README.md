# DarijaTranslate

DarijaTranslate is a web application built with Laravel that allows users to translate text from Darija (Moroccan Arabic) to English. The application uses the Gemini API to generate accurate translations while maintaining the original meaning and context of the text.

## Features

- **Text Translation**: Users can input text in Darija and receive an English translation.
- **Responsive Design**: The user interface is designed to be responsive and user-friendly across various devices.
- **Error Handling**: If the translation fails, a user-friendly error message is displayed.

## Technologies Used

- **Laravel**: PHP framework used to build the application.
- **Tailwind CSS**: For styling and making the interface responsive.
- **Gemini API**: For translating the Darija text to English.

## Installation

1. **Clone the repository**:
    ```sh
    git clone https://github.com/Houssam-nxy/DarijaTranslate.git
    cd DarijaTranslate
    ```

2. **Install dependencies**:
    ```sh
    composer install
    npm install
    npm run dev
    ```

3. **Set up environment variables**:
    - Copy `.env.example` to `.env`:
    ```sh
    cp .env.example .env
    ```
    - Update the `.env` file with your database credentials and Gemini API key.

4. **Serve the application**:
    ```sh
    php artisan serve
    ```

    The application will be accessible at `http://localhost:8000`.

## Usage

1. Navigate to the homepage.
2. Enter the text in Darija (Moroccan Arabic) that you want to translate.
3. Click the "Translate" button.
4. The translated text will be displayed in the designated area.

## File Structure

- `resources/views/components/layout.blade.php`: The main layout of the application.
- `resources/views/welcome.blade.php`: The view where the input and output sections are displayed.
- `app/Http/Controllers/TranslateController.php`: The controller handling the translation logic.
- `routes/web.php`: The routes for the application.

## Contributing

Feel free to fork this repository, make changes, and submit a pull request. Contributions are welcome!
