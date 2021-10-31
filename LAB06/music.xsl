<?xml version="1.0"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


<xsl:template match="/">
  <html>
  <body style="font-family:Arial;font-size:12pt;background-color:#005073;">
      <h2 style="text-align:center; -webkit-text-emphasis: dot;color: #71c7ec;"> MUSIC STUDIO</h2>
    
    <table border="1" bgcolor = "white">
      <tr bgcolor="#9acd32">
        <th>ID</th>
        <th>Topic</th>
        <th>Description</th>
        <th>Paragraph</th>
      </tr>
      <xsl:for-each select="musiccollect/music">
      <xsl:sort select = "musicId"/> 

        <tr>
          <td><xsl:value-of select="@musicId"/></td>
          <td><xsl:value-of select="musictopic"/></td>
          <td><xsl:value-of select="musicdesc"/></td>
          <td><xsl:value-of select="musicpara"/></td>
        </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>