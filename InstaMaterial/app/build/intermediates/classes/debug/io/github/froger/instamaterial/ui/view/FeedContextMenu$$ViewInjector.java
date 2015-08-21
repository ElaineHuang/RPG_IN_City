// Generated code from Butter Knife. Do not modify!
package io.github.froger.instamaterial.ui.view;

import android.view.View;
import butterknife.ButterKnife.Finder;
import butterknife.ButterKnife.Injector;

public class FeedContextMenu$$ViewInjector<T extends io.github.froger.instamaterial.ui.view.FeedContextMenu> implements Injector<T> {
  @Override public void inject(final Finder finder, final T target, Object source) {
    View view;
    view = finder.findRequiredView(source, 2131558570, "method 'onReportClick'");
    view.setOnClickListener(
      new butterknife.internal.DebouncingOnClickListener() {
        @Override public void doClick(
          android.view.View p0
        ) {
          target.onReportClick();
        }
      });
    view = finder.findRequiredView(source, 2131558571, "method 'onSharePhotoClick'");
    view.setOnClickListener(
      new butterknife.internal.DebouncingOnClickListener() {
        @Override public void doClick(
          android.view.View p0
        ) {
          target.onSharePhotoClick();
        }
      });
    view = finder.findRequiredView(source, 2131558572, "method 'onCopyShareUrlClick'");
    view.setOnClickListener(
      new butterknife.internal.DebouncingOnClickListener() {
        @Override public void doClick(
          android.view.View p0
        ) {
          target.onCopyShareUrlClick();
        }
      });
    view = finder.findRequiredView(source, 2131558573, "method 'onCancelClick'");
    view.setOnClickListener(
      new butterknife.internal.DebouncingOnClickListener() {
        @Override public void doClick(
          android.view.View p0
        ) {
          target.onCancelClick();
        }
      });
  }

  @Override public void reset(T target) {
  }
}
