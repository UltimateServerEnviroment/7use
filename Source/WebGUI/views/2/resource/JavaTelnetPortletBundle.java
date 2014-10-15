/*
 * Released under GPL version 2.0. Please refer to the license for more
 * information.
 * 
 * @author Rogue
 */
package rogue.contrib.portal.integration.resource;

import java.util.ListResourceBundle;

public class JavaTelnetPortletBundle
  extends ListResourceBundle
{
  public static final String HOST = "javax.portlet.preference.name.host";
  public static final String PORTLET_INFO_KEYWORDS = "javax.portlet.keywords";
  public static final String PORTLET_INFO_SHORT_TITLE = "javax.portlet.short-title";
  public static final String OK_LABEL = "oklabel";
  public static final String PORTLET_INFO_TITLE = "javax.portlet.title";
  public static final String APPLY_LABEL = "applylabel";
  public static final String PORTLETTITLE = "javax.portlet.preference.name.portletTitle";
  public static final String PORTLET_NOT_CUSTOMIZED = "portlet.not.customized";
  
  private static final Object[][] sContents =
  {
    {HOST, "Host"},
    {PORTLET_INFO_KEYWORDS, "telnet,portlet"},
    {PORTLET_INFO_SHORT_TITLE, "Java Telnet Portlet (JSR 168)"},
    {OK_LABEL, "OK"},
    {PORTLET_INFO_TITLE, "Java Telnet Portlet (JSR 168)"},
    {APPLY_LABEL, "Apply"},
    {PORTLETTITLE, "Portlet Title"},
    {PORTLET_NOT_CUSTOMIZED, "Please customize your portlet first. Please supply the server to which you wish to connect."}
  };

  public Object[][] getContents()
  {
    return sContents;
  }
}
