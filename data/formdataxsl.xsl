<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" 
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <body>
                <xsl:for-each select="information/form">
                    <table>
                        <tr>
                            <th>Time:</th>
                            <td>
                                <xsl:value-of select="time" />
                            </td>
                        </tr>
                        <tr>
                            <th>First Name:</th>
                            <td>
                                <xsl:value-of select="firstname" />
                            </td>
                        </tr>
                        <tr>
                            <th>Last Name:</th>
                            <td>
                                <xsl:value-of select="lastname" />
                            </td>
                        </tr>
                        <tr>
                            <th>Gender:</th>
                            <td>
                                <xsl:value-of select="gender" />
                            </td>
                        </tr>
                        <tr>
                            <th>Specialty:</th>
                            <td>
                                <xsl:value-of select="specialty" />
                            </td>
                        </tr>
                        <tr>
                            <th>Institution:</th>
                            <td>
                                <xsl:value-of select="institution" />
                            </td>
                        </tr>
                        <tr>
                            <th>Country:</th>
                            <td>
                                <xsl:value-of select="country" />
                            </td>
                        </tr>
                        <tr>
                            <th>Phone:</th>
                            <td>
                                <xsl:value-of select="phone" />
                            </td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>
                                <xsl:value-of select="email" />
                            </td>
                        </tr>
                        <tr>
                            <th>Using Guerbet Product:</th>
                            <td>
                                <xsl:value-of select="user" />
                            </td>
                        </tr>
                        <tr>
                            <th>(if no) Specify:</th>
                            <td>
                                <xsl:value-of select="specify" />
                            </td>
                        </tr>
                    </table>
                    <br/>
                </xsl:for-each>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
