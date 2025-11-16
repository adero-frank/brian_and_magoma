
# Brian & Magoma Advocates

This is a Laravel 12 project for the Brian & Magoma Advocates law firm website.

## Features
- Laravel 12.x
- Authentication (Breeze, Livewire, Volt, dark mode)
- Pest for testing
- Configured for local Windows development

## Setup Instructions

1. **Install PHP dependencies:**
	```powershell
	composer install
	```
2. **Copy .env and generate app key:**
	```powershell
	cp .env.example .env
	php artisan key:generate
	```
3. **Install Node.js dependencies:**
	```powershell
	npm install
	```
4. **Build frontend assets:**
	```powershell
	npm run build
	```
	**Note:** The folder name contains spaces and an ampersand (&), which may cause issues with npm scripts and Vite. Consider renaming the project folder to avoid build errors.
5. **Run migrations:**
	```powershell
	php artisan migrate
	```
6. **Start the development server:**
	```powershell
	php artisan serve
	```

## Troubleshooting
- If you encounter errors with Vite or npm scripts, try moving the project to a folder without spaces or special characters.

---

For more details, see `.github/copilot-instructions.md`.
