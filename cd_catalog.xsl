<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>My Movie Collection</h2>
  <table border="1">
    <tr bgcolor="Orange">
      <th>Movie Name</th>
      <th>Director</th>
	    <th>Rating</th>
      <th>Release Year</th>
    </tr>
    <xsl:for-each select="CATALOG/CD">
    <tr>
      <td><xsl:value-of select="TITLE"/></td> 
      <td><xsl:value-of select="ARTIST"/></td>
	    <td><xsl:value-of select="COMPANY"/></td>
      <td><xsl:value-of select="YEAR"/></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>