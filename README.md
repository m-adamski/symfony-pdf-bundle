# PDF Bundle for Symfony

Helper whose goal is to simplify the process of generating PDF documents using the [TCPDF library](https://tcpdf.org).

This bundle is compatible with Symfony 4.1 and Symfony 5.0. Symfony 3.4 compatibility abandoned.

## Installation

This bundle can be installed by Composer:

```
$ composer require m-adamski/symfony-pdf-bundle
```

## How to use it?

There is only one function that generates an instance of the PDFDocument class with the default settings. You can modify parameters before generating the final PDF document.

| Method       | Description                                                    |
| ------------ | -------------------------------------------------------------- |
| initDocument | A function that generates an instance of the PDFDocument class |

## PDF Document

An instance of the PDFDocument class that will be generated using the helper contains an additional set of functions.

| Method     | Description                                                                                                                                  |
| ---------- | -------------------------------------------------------------------------------------------------------------------------------------------- |
| writeHTML  | The function sets the content of the document from the given HTML code                                                                       |
| renderHTML | Similar to the writeHTML function, the content of the document is set from the HTML code that will be generated from the given Twig template |
| setFooter  | A function to configure the footer of a PDF document                                                                                         |
| setFont    | With this function, you can change the font that will be used when generating a PDF document                                                 |
| save       | The function generates a PDF document                                                                                                        |
| output     | The function generates a PDF document and returns a response with the Content-Type header set to application/pdf                             |
| getPDFData | The function returns the PDF document data                                                                                                   |

There are also getters and setters for the basic parameters of a PDF document (author, tags, etc.).

## License

MIT
