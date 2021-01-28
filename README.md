# Parsedown Numbered Headings

This is an extension for [Parsedown](http://parsedown.org) that adds Numbered Headings. 

## Example

This extension will transform this:

```Markdown
# Lorem ipsum dolor sit amet

## Duis a augue arcu

### Sed quis turpis tempus

### Sed in tellus vitae

# Felis hendrerit tempus sit amet eu elit

## In faucibus metus augue

## Sed elit est

### Vestibulum nibh ante

#### Hendrerit vitae mollis nec

#### Aenean vulputate neque eget

## Etiam vestibulum

### Donec mattis pharetra tincidunt
```

into

```HTML
<h1>1. Lorem ipsum dolor sit amet</h1>
<h2>1.1. Duis a augue arcu</h2>
<h3>1.1.1. Sed quis turpis tempus</h3>
<h3>1.1.2. Sed in tellus vitae</h3>
<h1>2. Felis hendrerit tempus sit amet eu elit</h1>
<h2>2.1. In faucibus metus augue</h2>
<h2>2.2. Sed elit est</h2>
<h3>2.2.1. Vestibulum nibh ante</h3>
<h4>2.2.1.1. Hendrerit vitae mollis nec</h4>
<h4>2.2.1.2. Aenean vulputate neque eget</h4>
<h2>2.3. Etiam vestibulum</h2>
<h3>2.3.1. Donec mattis pharetra tincidunt</h3>
```

## Installation

Depending if you're using **Parsedown** or **ParsedownExtra**, you will need to include the appropriate file:

### Parsedown

```PHP
include_once 'Parsedown.php';
include_once 'ParsedownNumberedHeadings.php';
```

### ParsedownExtra

```PHP
include_once 'Parsedown.php';
include_once 'ParsedownExtra.php';
include_once 'ParsedownExtraNumberedHeadings.php';
```


## Usage

Use as you would normal Parsedown

```PHP
$Parsedown = new ParsedownNumberedHeadings();
echo $Parsedown->text("# Heading");
```

will echo

```HTML
<h1>1. Heading</h1>
```

This extension only supports up to H8.