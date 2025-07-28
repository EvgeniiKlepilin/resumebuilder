# ResumeBuilder

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D5.4-blue.svg)](https://php.net)
[![Web](https://img.shields.io/badge/Web-HTML5%20%7C%20CSS3-orange.svg)](https://www.w3.org/standards/webdesign/htmlcss)

A simple, elegant Resume One-Page Website builder with Content Management System (CMS) functionality built in PHP. This project demonstrates object-oriented programming concepts and clean code architecture for generating professional resume websites.

## Features

- **Object-Oriented Design**: Clean PHP classes for different resume sections
- **Responsive Layout**: Mobile-friendly design with CSS styling
- **Modular Architecture**: Separate classes for Header, Experience, Education, and Skills
- **Easy Content Management**: Simple PHP-based system for updating resume content
- **Professional Output**: Generates clean, printable resume pages
- **Customizable Sections**: Support for multiple experiences, education entries, and skill sets

## Project Structure

```
resumebuilder/
├── index.php           # Main resume page and content
├── item_classes.php    # Core PHP classes for resume components
├── util.php           # Utility functions
├── style.css          # Styling and layout
├── README.md          # Project documentation
└── LICENSE            # MIT License
```

## Classes Overview

### Core Classes

- **`PageManager`**: Handles HTML document structure and meta information
- **`Header`**: Manages personal information and contact details
- **`Item`**: Base class for resume sections with title, description, and dates
- **`Experience`**: Extends Item to include references for work experience
- **`Education`**: Simple education entry class
- **`Skillset`**: Manages lists of skills and competencies

## Installation & Usage

1. **Clone the repository**:
   ```bash
   git clone https://github.com/EvgeniiKlepilin/resumebuilder.git
   cd resumebuilder
   ```

2. **Set up a web server** with PHP support (Apache, Nginx, or local development server):
   ```bash
   php -S localhost:8000
   ```

3. **Customize your resume** by editing the content in `index.php`:
   - Update personal information in the Header section
   - Add/modify work experiences
   - Update education details
   - Customize skill sets

4. **Style customization**: Modify `style.css` to change the visual appearance

## Example Usage

```php
// Create a new work experience
$title = "Senior Developer at Tech Company";
$description = "Led development of innovative web applications...";
$startDate = "January 2020";
$endDate = "Present";
$references = array("John Doe / john@company.com / +1234567890");

$experience = new Experience($title, $description, $startDate, $endDate, $references);
$experience->printItem();

// Add skills section
$skillsList = array("PHP", "JavaScript", "MySQL", "HTML5", "CSS3");
$skills = new Skillset("Technical Skills", "", "", "", $skillsList);
$skills->printItem();
```

## Requirements

- PHP 5.4 or higher
- Web server (Apache, Nginx, or built-in PHP server)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Author

**Evgenii Klepilin**
- GitHub: [@EvgeniiKlepilin](https://github.com/EvgeniiKlepilin)
